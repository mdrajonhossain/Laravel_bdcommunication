<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailList;
use App\Models\User;
use App\Models\Smtp;
use App\Models\MessageLead;
use App\Models\Message;
use App\Models\SenderInfo;
use Auth;
use DB;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Jobs\SendUserEmails;
use Carbon\Carbon;
use App\Models\image;

class SmtpsController extends Controller
{
    public function Smtp_list(){
        
        $Smtp_list = Smtp::where('user_id',auth::user()->id)->paginate(100);
        return view('Smtp_list',compact('Smtp_list'));
    }

    public function Smtp_list_make(){
        
        return view('Smtp_list_make');
    }

    public function Smtp_list_post(Request $request){

    $smtp = new Smtp;
    
    $smtp->email     = $request->email; 
    $smtp->password = $request->password;
    $smtp->user_id  = auth::user()->id;
    $smtp->hostname  = $request->hostname;
    $smtp->port  = $request->port;
    $smtp->daily_limit  = $request->daily_limit;
    $smtp->from_email  = $request->email;
    $smtp->save();    
    return redirect('/Smtp_list')->with('success','Gmail Added Successfully');
    }

    public function Smtp_edit($id)
    {
    $Smtp_edit = Smtp::find($id);
    return view('Smtp_edit',compact('Smtp_edit'));
    }


    public function Smtp_edit_post(Request $request,$id){

        $smtp = Smtp::find($id);
        
        $smtp->email     = $request->email; 
        $smtp->password = $request->password;
        $smtp->user_id  = auth::user()->id;
        $smtp->hostname  = $request->hostname;
        $smtp->port  = $request->port;
        $smtp->daily_limit  = $request->daily_limit;
        $smtp->from_email  = $request->email;
        $smtp->save();    
        return redirect('/Smtp_list')->with('success','Gmail Added Successfully');
        }



    public function Smtp_delete($id)
        {
        $Smtp = Smtp::find($id);
        $Smtp->delete();
        return back()->with('danger',' Deleted Successfully');
        }




        public function Smtp_Sent() {
            require base_path("vendor/autoload.php");
        
            $user = User::first();

            if (is_null($user)) {

                echo "waiting for user status 0";
                return;
                
            }
        
                $smtps = Smtp::where('status', 1)
                             ->where('user_id', $user->id)
                             ->where('daily_limit', '>', DB::raw('sent'))
                             ->get()
                             ->toArray();
        // dd($smtps);
                if (empty($smtps)) {
                    echo "No SMTP settings found for user {$user->name}<br>";
                    User::where('id', $user->id)->update(['status' => 1]);
                   
                    return;
                }
        
                $message = Message::where('user_id', $user->id)
                                  ->where('status', 1)
                                  ->first();
        
                if (is_null($message)) {
                    echo "No Message found for user {$user->name}<br>";
                    User::where('id', $user->id)->update(['status' => 1]);
                    echo "User {$user->name} status updated to 1 after sending 50 emails.<br>";
                    return;
                    
                }
        
                $emailList = MessageLead::where('user_id', $user->id)
                                        ->where('status', 0)
                                        ->where('message_id', $message->id)
                                        ->get();
        
                if ($emailList->isEmpty()) {
                    echo "No emails to send for user {$user->name}<br>";
                    
                }
        
                $smtpCount = count($smtps);
                $smtpIndex = 0;
                $emailCount = 0;
                $nostosmtp = 0;
                foreach ($emailList as $key => $email) {
                    if (!filter_var($email->email, FILTER_VALIDATE_EMAIL)) {
                         // Skip invalid email addresses
                    }
        
                    $smtp_ser = $smtps[$smtpIndex];
        
                    // Check daily limit
                    $smtpSentCount = Smtp::where('id', $smtp_ser['id'])->value('sent');
                    if ($smtpSentCount >= $smtp_ser['daily_limit']) {
                        echo "SMTP limit reached for {$smtp_ser['hostname']}<br>";
                        User::where('id', $user->id)->update(['status' => 1]);
                        return;
                        // Rotate to the next SMTP server
                        $smtpIndex = ($smtpIndex + 1) % $smtpCount;
                    }
        
                    $mail = new PHPMailer(true);
        
                    try {
                        $sender_info = SenderInfo::where('user_id', $user->id)->first();
        
                        // SMTP Configuration
                        $mail->SMTPDebug = false; // Set to 2 for detailed debug output
                        $mail->isSMTP();
                        $mail->Host       = $smtp_ser['hostname'];
                        $mail->SMTPAuth   = true;
                        $mail->Username   = $smtp_ser['email'];
                        $mail->Password   = $smtp_ser['password'];
                        $mail->SMTPSecure = 'tls';
                        $mail->Port       = $smtp_ser['port'];
        
                        // Set Sender Info
                        $mail->setFrom($smtp_ser['email'], $sender_info->sendername);
        
                        // Add Recipient
                        $mail->clearAddresses();
                        $mail->addAddress($email->email);
                        $mail->addAddress($email->email, "{$email->first_name} {$email->last_name}");
        
                        if ($sender_info->replyto !== null) {
                            $mail->addReplyTo($sender_info->replyto);
                        }
        
                        // Attach Images
                        $images = Image::where('message_id', $message->id)->get();
                        foreach ($images as $image) {
                            $mail->addAttachment(public_path('image/') . $image->name, $image->name);
                        }
                        $mail->isHTML(true);
                        // Prepare Email Body
                        $mbody = $message->body;
                        $mbody = str_replace('{first_name}', $email->first_name, $mbody);
                        $mbody = str_replace('{last_name}', $email->last_name, $mbody);
                        $mbody = str_replace('{company_name}', $email->company, $mbody);
                        $mbody = str_replace('{website}', $email->website, $mbody);
                        $mbody = str_replace('{custom_field}', $email->custom_field, $mbody);
        
                        // Set Subject and Body
                        $mail->Subject = $message->subject;
                        $mail->Body = $mbody . '<br><img src="http://panel.arsoftbd.xyz/track-email/' . $email->id . '" width="1" height="1" alt="" />';
                        $mail->XMailer = false;
        
                        // Send Email
                        $mail->send();
                        echo "Email sent to {$email->email} using {$smtp_ser['email']}<br>";
        
                        $emailCount++;
        
                        // Increment counters
                        MessageLead::where('id', $email->id)->update(['status' => 1]);
                        Smtp::where('id', $smtp_ser['id'])->increment('sent', 1);
                        Message::where('id', $message->id)->increment('sent', 1);
        
                        // Rotate SMTP
                        $smtpIndex = ($smtpIndex + 1) % $smtpCount;
        
                        if ($emailCount >= 30) {
                            User::where('id', $user->id)->update(['status' => 1]);
                            echo "User {$user->name} status updated to 1 after sending 50 emails.<br>";
                            break; // Stop after 50 emails
                        }
        
                    } catch (Exception $e) {
                        
                        echo "Mailer Error for {$email->email} using {$smtp_ser['email']}: {$mail->ErrorInfo}<br>";
                        $smtpIndex = ($smtpIndex + 1) % $smtpCount;
                        $emailCount++;
                        $nostosmtp++;
                        if ($nostosmtp >= 3) {
                            User::where('id', $user->id)->update(['status' => 1]);
                            echo "User {$user->name} status updated to 1 after sending 50 emails.<br>";
                            break; // Stop after 50 emails
                        }
                        echo "NostolCount is  {$nostosmtp} .<br>";
                    }
                }
        
                echo "Completed email sending for user {$user->name}<br>";
            
        }
        
        
        
        
        
        
        
        


    public function trackEmail($emailId)
    {
        $email = MessageLead::find($emailId);
        
        if ($email && $email->open === 0) {
            
            
            // Check if the email was created within the last 5 minutes
                $email->update(['open' => 1]);
                $email;
                
                
                $oldemail = EmailList::where('email', $email->email)->first();
                EmailList::where('id',$oldemail->id)->increment('open','1');
                // dd($oldemail);
        }
    
        return response()->make(base64_decode(
            'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/wcAAgAB/dfYGGgAAAAASUVORK5CYII='
        ), 200, ['Content-Type' => 'image/png']);
    }


    public function messagestatus()
{
    $now = Carbon::now(); // Get the current time in the configured timezone

    // Fetch messages with status 0
    $messages = Message::where('status', 0)->get(); 

    foreach ($messages as $message) {
        // Convert the message time to a Carbon instance
        $mctime = Carbon::parse($message->time);

        if ($mctime->lt($now)) { // Check if message time is less than the current time
            echo "Updating status for message ID: {$message->id}\n";
            // $message->update(['status' => 1]); // Update the message status to 1
            Message::where('id',$message->id)->update(['status'=>1]);
        } else {
            $diff = $now->diff($mctime);
            $days = $diff->days;
            $hours = $diff->h;
            $minutes = $diff->i;

            echo "Message ID: {$message->id} is still pending. Time difference: {$days} days, {$hours} hours, {$minutes} minutes\n";
        }
    }
}

        public function MCCom()
        {
            $mess = Message::where('status', 1)->get(); 
            foreach ($mess as $messages) {
        if ($messages->sent >= $messages->count) {
            echo "yahoo update message ID: {$messages->id}\n";
            Message::where('id',$messages->id)->update(['status'=>2]);
        }else {
            echo "wait for compleate: {$messages->id}\n";
        }
    }
    }

    public function userstatus()
    {
        $usersWithMessageStatusOne = User::whereHas('messages', function ($query) {
            $query->where('status', 1);
        })->count();

        $time = $usersWithMessageStatusOne +1;
        // dd($time);
        $now = Carbon::now(); // Get the current time
        $thresholdTime = $now->subMinutes($time); // Calculate the threshold time (5 minutes ago)
    
        // Get all users with status 1
        $users = User::where('status', 1)->get();

        
        foreach ($users as $user) {
            $lastUpdate = $user->updated_at; // Get the last update time for each user
    
            // Check if the user's last update time is earlier than the threshold time
            if ($lastUpdate->lt($thresholdTime)) {
                echo "Updating status for user ID: {$user->id}\n";
                // $user->update(['status' => 0]); // Update the user's status to 0
                User::where('id',$user->id)->update(['status'=>0]);
            } else {
                $timeDifference = $lastUpdate->diffInMinutes($now); // Calculate the time difference
                echo "User ID: {$user->id} is still active. Time difference: {$timeDifference} minutes\n";
            }
        }
    }



    public function limit()
    {
        $twhour = Carbon::now()->subHours(23);
            $smtp = Smtp::get();
            foreach ($smtp as $smtp) {
                $smtplimit = $smtp->updated_at;
                $timeDifference = $smtplimit->diff($twhour);
               
                if ($smtplimit < $twhour) {
                    echo "ok";
                    Smtp::where('id',$smtp->id)->update(['sent'=>0]);
                } else {
                    echo  $timeDifference->format('%h hours, %i minutes');
                   
                }
            }
    }


































    public function Smtp_status($id){

        $status = Smtp::find($id);

        if($status->status==0){
            $status->status = 1;
            $status->save();
            return back()->with('status','Your Status Inactive  Successfully');
        }else{
            $status->status = 0;
            $status->save();
            return back()->with('status','Your Status Active Successfully');
        }
    }






    public function Test_Smtp($id){
        $smtp = Smtp::find($id);
        return view('Test_Smtp',compact('smtp'));
    }

    public function Test_Camp($id){
        $Test_Camp = Message::find($id);
        return view('Test_Camp',compact('Test_Camp'));
    }

    public function Test_Smtp_post(Request $request){
        // dd($request);
    
        $hostname = $request->hostname;
        $username = $request->username;
        $password = $request->password;
        $port = $request->port;
        $to = $request->to;
        $from_email = $request->from_email;
       
    
        require base_path("vendor/autoload.php");
    
        
    
           
               
        $mail = new PHPMailer(); 
        $mail->SMTPDebug  = 1;
        $mail->IsSMTP(); 
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = 'tls'; 
         $mail->Host       = $hostname;
         $mail->Port       = $port;
        $mail->IsHTML(true);
        
        $mail->CharSet = 'UTF-8';
        $mail->Username = $username;
        $mail->Password =  $password;
        $mail->setFrom($from_email, 'Mailer');
        $mail->Subject = 'Here is the Test subject';
        $mail->Body  = 'Here is the Test Body';
        $mail->addAddress($to);
        $mail->SMTPOptions=array('ssl'=>array(
            'verify_peer'=>false,
            'verify_peer_name'=>false,
            'allow_self_signed'=>false
        ));
        $mail->XMailer = false;
        if(!$mail->Send()){
            echo "<h1 style='color:Tomato;'>Send Message Faield</h1> <p>Check Your Smtp Server</p>";
    
        }else{
            echo "<h1 style='color:DodgerBlue;'>Send Message Successful</h1> <p>Check Your Mail Inbox/Spam</p>";
            
        }
    }


    public function Test_Camp_post(Request $request){
        // dd($request);
        $smtps = DB::table('smtps')->where('user_id', auth::user()->id)->where('status', 1)->first();
        $hostname = $smtps->hostname;
        $username = $smtps->email;
        $password = $smtps->password;
        $port = $smtps->port;
        $to = $request->email;
        $from_email = $smtps->from_email;
        $sub = $request->subject;
        $body = $request->body;

        require base_path("vendor/autoload.php");
    
        
    
           
               
        $mail = new PHPMailer(); 
        $mail->SMTPDebug  = 1;
        $mail->IsSMTP(); 
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = 'tls'; 
         $mail->Host       = $hostname;
         $mail->Port       = $port;
        $mail->IsHTML(true);
        
        $mail->CharSet = 'UTF-8';
        $mail->Username = $username;
        $mail->Password =  $password;
        $mail->setFrom($from_email, 'Mailer');
        $mail->Subject = $sub;
        $mail->Body  = $body;
        $mail->addAddress($to);
        $mail->SMTPOptions=array('ssl'=>array(
            'verify_peer'=>false,
            'verify_peer_name'=>false,
            'allow_self_signed'=>false
        ));
        $mail->XMailer = false;
        if(!$mail->Send()){
            echo "<h1 style='color:Tomato;'>Send Message Faield</h1> <p>Check Your Smtp Server</p>";
    
        }else{
            echo "<h1 style='color:DodgerBlue;'>Send Message Successful</h1> <p>Check Your Mail Inbox/Spam</p>";
            
        }
    }

    public function sender_info()
    {
    $sender_info = SenderInfo::where('user_id',auth::user()->id)->first();
    return view('sender_info',compact('sender_info'));
    }

    public function sender_info_post(Request $request)
    {
        $sender_info = SenderInfo::where('user_id',auth::user()->id)->first();
        $sender_info->sendername = $request->sendername;
        $sender_info->replyto = $request->replyto;
        $sender_info->user_id = auth::user()->id;
        $sender_info->save();
    return redirect('/sender_info')->with('success','Sender info Updated Successfully');
    }
}

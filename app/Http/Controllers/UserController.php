<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\invoice;
use App\Models\group;
use Hash;
use Auth;
use App\Models\EmailList;
use Carbon\Carbon;
use App\Models\Message;
use App\Models\MessageLead;
use App\Models\SenderInfo;
use App\Models\Smtp;
class UserController extends Controller
{
    public function Users_list(){
        $users = User::all();
        return view('user',compact('users'));
    }

    public function user_make(){
        
        return view('user_make');
    }

    public function user_post(Request $request){
        // dd($request);
        $user          = new User;
        $user->name    = $request->name;
        $user->email   = $request->email;
        $user->phone   = $request->phone;
        $user->password = Hash::make($request->password);
        $user->expiry_date   = $request->expiry_date;
        $user->save();

        $usergroup          = new group;
        $usergroup->name    = "Default";
        $usergroup->user_id    = $user->id;
        $usergroup->save();

        $userinvoice          = new invoice;
        $userinvoice->invoice_date    = Carbon::now()->toDateString();
        $userinvoice->due_date    = $request->expiry_date;
        $userinvoice->total    = 100;
        $userinvoice->paid    = $request->paid;
        $userinvoice->user_id    = $user->id;
        $userinvoice->save();

        $SenderInfo          = new SenderInfo;
        $SenderInfo->sendername    = $request->name;
        $SenderInfo->replyto   = $request->email;
        $SenderInfo->user_id   = $user->id;
        $SenderInfo->save();

        return redirect('/Users_list')->with('success','User Make Successfully');
    }


    public function user_edit($id)
    {
    $user_edit = User::find($id);
    
    return view('user_edit',compact('user_edit'));
    }


    public function user_edit_post(Request $request,$id){
        // dd($request);
        $user          = User::find($id);
        $user->name    = $request->name;
        $user->email   = $request->email;
        $user->phone   = $request->phone;
        $user->expiry_date   = $request->expiry_date;
        $user->save();

        return redirect('/Users_list')->with('success','User Make Successfully');
    }


    public function delete_user($id)
    {

    $delete_user = User::find($id);
    $delete_user->delete();

    $usergroup = group::where('user_id',$id)->get();
        foreach ($usergroup as $key => $usergroups) {
            $usergroups->delete();
        }
    $userinvoice = invoice::where('user_id',$id)->get();
    foreach ($userinvoice as $key => $userinvoices) {
        $userinvoices->delete();
    }

    $userEmailList = EmailList::where('user_id',$id)->get();
    foreach ($userEmailList as $key => $userEmailLists) {
        $userEmailLists->delete();
    }

    $userMessage = Message::where('user_id',$id)->get();
    foreach ($userMessage as $key => $userMessages) {
        $userMessages->delete();
    }

    $userMessageLead = MessageLead::where('user_id',$id)->get();
    foreach ($userMessageLead as $key => $userMessageLeads) {
        $userMessageLeads->delete();
    }

    $userSenderInfo = SenderInfo::where('user_id',$id)->get();
    foreach ($userSenderInfo as $key => $userSenderInfos) {
        $userSenderInfos->delete();
    }

    $userSmtp = Smtp::where('user_id',$id)->get();
    foreach ($userSmtp as $key => $userSmtps) {
        $userSmtps->delete();
    }


    
    return back()->with('danger',' Deleted Successfully');

    }



    public function invoice(){
        // $invoice = invoice::all();
        $invoice =  invoice::where('user_id',auth::user()->id)->get();
        return view('invoice',compact('invoice'));
    }

    public function invoice_make(){
        $user = User::all();
        return view('invoice_make',compact('user'));
    }

    public function invoice_post(Request $request){
        $invoice          = new invoice;
        $invoice->invoice_date    = $request->invoice_date;
        $invoice->due_date    = $request->due_date;
        $invoice->total    = $request->total;
        $invoice->user_id    = $request->user_id;
        $invoice->save();

        return redirect('/invoice')->with('success','invoice Make Successfully');
    }

    public function invoice_view($id)
    {
   $invoice_view = invoice::find($id);
   return view('invoice_view',compact('invoice_view'));
   }

   public function invoice_edit_post(Request $request,$id){
    $invoice          = invoice::find($id);
    $invoice->invoice_date    = $request->invoice_date;
    $invoice->due_date    = $request->due_date;
    $invoice->total    = $request->total;
    $invoice->user_id    = $request->user_id;
    $invoice->payment    = $request->payment;
    $invoice->save();

    return redirect('/invoice')->with('success','invoice Make Successfully');
}

public function invoice_edit_post_user(Request $request,$id){
    $invoice          = invoice::find($id);
    $invoice->payment    = $request->payment;
    $invoice->save();

    return redirect('/invoice')->with('success','invoice Make Successfully');
}

    public function invoice_view_admin()
    {
    $invoice_view_admin = Invoice::latest()->get();

    return view('invoice_view_admin',compact('invoice_view_admin'));
    }

    public function invoice_admin_edit($id){
        $invoice          = invoice::find($id);
        return view('invoice_admin_edit',compact('invoice'));
    }


    public function invoice_admin_edit_post(Request $request,$id){
        $invoice          = invoice::find($id);
        $invoice->invoice_date    = $request->invoice_date;
        $invoice->due_date    = $request->due_date;
        $invoice->total    = $request->total;
        $invoice->payment    = $request->payment;
        $invoice->paid    = $request->paid;
        $invoice->save();
    
        return redirect('/invoice_view_admin')->with('success','invoice Edit Successfully');
    }

public function my_profile(){
    $my_profile = User::where('id',auth::user()->id)->first();
    

    return view('my_profile',compact('my_profile'));
}

public function my_profile_post(Request $request){
    $request->validate([
        'name' => 'required|string|max:255',
        'file' => 'nullable|image|mimes:jpg,jpeg,png|max:5048', // Adjust as needed
    ]);

    // Get the authenticated user
    $my_profile = User::where('id', auth::user()->id)->first();

    // Update the user's name
    $my_profile->name = $request->name;
    // dd($request->hasFile('file'));
    // Handle file upload if a file is provided
    if ($request->hasFile('file')) {

        if ($my_profile->profile_pic && file_exists(public_path($my_profile->profile_pic))) {
            unlink(public_path($my_profile->profile_pic));
        }
        // Generate a unique file name
        $image = $request->file('file');
        $imageName = time() . '_' . rand(1, 99) . '.' . $image->extension();

        // Move the file to the public directory
        $image->move(public_path('profileimg'), $imageName);


        // Save the image path to the database
        $my_profile->profile_pic =  $imageName;
        // dd($imageName);
    }

    // Save the user's profile
    $my_profile->save();

    return redirect('/my_profile')->with('success','Update Successfully');
}


    public function changePassword()
    {
    return view('changePassword');
    }

    public function changePassword_post(Request $request)
    {
            # Validation
            $request->validate([
                'old_password' => 'required',
                'new_password' => 'required|confirmed',
            ]);


            #Match The Old Password
            if(!Hash::check($request->old_password, auth()->user()->password)){
                return back()->with("error", "Old Password Doesn't match!");
            }


            #Update the new Password
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);

            return back()->with("status", "Password changed successfully!");
    }

    public function out() {
        Auth::logout();
        return redirect('/login')->with('success','Update Successfully');
    }


    public function loginAsUser($id)
    {
        // Store the current admin's ID in the session
        session(['admin_id' => Auth::id()]);

        // Log in as the selected user
        Auth::loginUsingId($id);

        // Redirect to the user's dashboard or any other desired page
        return redirect('/home');
    }

}

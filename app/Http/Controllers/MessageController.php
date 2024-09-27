<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\group;
use App\Models\EmailList;
use App\Models\MessageLead;
use App\Models\image;
use Auth;
class MessageController extends Controller
{
    public function campaign(){
        
        $campaign = Message::where('user_id',auth::user()->id)->get();
        return view('campaign',compact('campaign'));
    }

    public function campaign_make(){
        
        $group = group::where('user_id',auth::user()->id)->get();
        return view('campaign_make',compact('group'));
        
    }

    public function campaign_post(Request $request){

        
        $groupcount = EmailList::where('group_id',$request->group_id)->count();
        $emaillist = EmailList::where('group_id',$request->group_id)->get();
        // dd($emaillist);
        $groupname = group::find($request->group_id)->name;
        
        $campaign = new Message;
        $campaign->subject     = $request->subject; 
        $campaign->body = $request->body;
        $campaign->user_id  = auth::user()->id;
        $campaign->count = $groupcount;
        $campaign->time     = $request->time;
        $campaign->email_group     = $groupname;
        $campaign->save();
        foreach ($emaillist as $key => $emails) {
            $messageLead = new MessageLead();
            $messageLead->email = $emails->email;
            $messageLead->user_id = $emails->user_id;
            $messageLead->first_name = $emails->first_name;
            $messageLead->last_name = $emails->last_name;
            $messageLead->company = $emails->company;
            $messageLead->website = $emails->website;
            $messageLead->custom_field = $emails->custom_field;
            $messageLead->group_id = $emails->group_id;
            $messageLead->message_id = $campaign->id;
            $messageLead->save();
        }

        $images = [];
        if ($request->images){
            foreach($request->images as $key => $image)
            {
                $imageName = time().rand(1,99).'.'.$image->extension();  
                $image->move(public_path('/image'), $imageName);
        
                $newImage = new image;
                $newImage->name = $imageName;
                $newImage->message_id = $campaign->id;
                $newImage->save();
            }
        }
        
        
        return redirect('/campaign')->with('success','Campaign Create Successfully');
        }

        public function campaign_edit($id)
        {
        $campaign_edit = Message::find($id);
        return view('campaign_edit',compact('campaign_edit'));
            
        }

        public function campaign_edit_post(Request $request,$id)
        {
       $campaign_edit = Message::find($id);
       $campaign_edit->subject = $request->subject;
       $campaign_edit->body = $request->body;
       $campaign_edit->time = $request->time;
       $campaign_edit ->save();
        return redirect('/campaign')->with('success','Regular SMTP Updated Successfully');
       }

       public function campaign_delete($id)
        {
        $campaign_delete = Message::find($id);
        $campaign_delete->delete();
        $messagelead = MessageLead::where('message_id',$id)->get();
            foreach ($messagelead as $key => $messageleads) {
                $messageleads->delete();
            }
        
        
        

        return back()->with('danger',' Deleted Successfully');
        }


        public function campaign_report($id){
        
            $report = MessageLead::where('message_id',$id)->get();
            $totalOpens = MessageLead::where('message_id', $id)->where('open', 1)->count();
            $totalsent = MessageLead::where('message_id', $id)->where('status', 1)->count();
            $totalpending = MessageLead::where('message_id', $id)->where('status', 0)->count();
            $totallead = MessageLead::where('message_id',$id)->count();
            // dd($totallead);
            
            return view('campaign_report',compact('report','totalOpens','totalsent','totalpending','totallead'));
            
        }


        public function image_del($id)
        {
            // Find the image by its ID
            $img = Image::find($id);
        
            // Construct the full path to the image
            $pp = public_path('image/' . $img->name);
        
            // Delete the image record from the database
            $img->delete();
        
            // Check if the file exists and delete it
            if (file_exists($pp)) {
                unlink($pp);
                return back()->with('danger', 'Image Deleted Successfully');
            } else {
                return back()->with('error', 'File not found: ' . $pp);
            }
        }
        


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailList;
use App\Models\group;
use App\Models\from;
use Auth;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmailListExport;


class EmailListController extends Controller
{
    public function Email_list(){
        // $Email_list = EmailList::all();
        $Email_list = DB::table('email_lists')->where('user_id',auth::user()->id)->simplePaginate(100);
        return view('Email_list',compact('Email_list'));
    }



    public function Email_list_make(){
        $group = group::where('user_id',auth::user()->id)->get();
        
        return view('Email_list_make',compact('group'));
    }

    public function backup()
    {
        $user = auth()->user();
    
        if (!$user) {
            return redirect()->route('login')->withErrors('You must be logged in to export data.');
        }
    
        return Excel::download(new EmailListExport($user), 'backup' . date('Y-m-d') . '.csv');
    }


    public function Email_list_post(Request $request){

        
        $EmailList = new EmailList;
        
        $EmailList->email     = $request->email;
        $EmailList->first_name     = $request->first_name;
        $EmailList->last_name     = $request->last_name;
        $EmailList->company     = $request->company;
        $EmailList->website     = $request->website;
        $EmailList->custom_field     = $request->custom_field;
        $EmailList->group_id     = $request->group_id;
        $EmailList->user_id  = auth::user()->id;

        $EmailList->save();

        return redirect('/Email_list')->with('success','Group Added Successfully');
    }


    public function Email_list_delall(){
        EmailList::query()->where('user_id',auth::user()->id)->delete();
        return back()->with('danger','Insert leads mail deleted Successfully');
    }

    public function Email_edit($id)
    {
    $Email_edit = EmailList::find($id);
    $group = group::where('user_id',auth::user()->id)->get();
    return view('Email_edit',compact('Email_edit','group'));
    }


    public function Email_edit_post(Request $request,$id){

        
        $EmailList = EmailList::find($id);
        
        $EmailList->email     = $request->email;
        $EmailList->first_name     = $request->first_name;
        $EmailList->last_name     = $request->last_name;
        $EmailList->company     = $request->company;
        $EmailList->website     = $request->website;
        $EmailList->group_id     = $request->group_id;
        $EmailList->custom_field     = $request->custom_field;
        $EmailList->user_id  = auth::user()->id;
        $EmailList->save();

        return redirect('/Email_list')->with('success','Group Added Successfully');
    }

    public function Email_del($id)
    {
    $Email_del = EmailList::find($id);
    $Email_del->delete();
    return back()->with('danger',' Deleted Successfully');
    }


    public function group_list(){
        // $Email_list = EmailList::all();
        $group_list = DB::table('groups')->where('user_id',auth::user()->id)->simplePaginate(100);
        return view('group_list',compact('group_list'));
    }

    public function group_make(){
        
        return view('group_make');
    }


    public function group_post(Request $request){

        $group = new group;
        
        $group->name     = $request->name; 
       
        $group->user_id  = auth::user()->id;
        
        $group->save();    
        return redirect('/group_list')->with('success','Group Added Successfully');
        }



    public function group_edit($id)
    {
    $group_edit = group::find($id);
    return view('group_edit',compact('group_edit'));
    }

    public function group_edit_post(Request $request,$id)
    {
   $group = group::find($id);
   $group->name = $request->name;
   $group ->save();
    return redirect('/group_list')->with('success','Regular SMTP Updated Successfully');
   }

   public function group_delete($id)
   {
   $group_edit = group::find($id);
   $group_edit->delete();
   $EmailList = EmailList::where('group_id',$id)->get();
   foreach ($EmailList as $key => $EmailLists) {
       $EmailLists->delete();
   }




return back()->with('danger',' Deleted Successfully');
   }



   public function txt_emails(Request $request)
   {
       // Validate the file upload
       $request->validate([
           'file' => 'required|file|mimes:csv,txt|max:2048',
       ]);
   
       // Retrieve the uploaded file
       $file = $request->file('file');
   
       // Open the file for reading
       if (($handle = fopen($file->getRealPath(), "r")) !== false) {
           while (($data = fgetcsv($handle, 1000, ",")) !== false) {
               // Assuming the CSV has two columns: email and password
               $smtp = new EmailList([
                   
                   'email' => $data[0],

                   
               ]);
   
               // Save the SMTP object to the database
               $smtp->user_id  = auth::user()->id;
               $smtp->group_id  = $request->group_id;
               $smtp->save();
           }
           fclose($handle);
       }
   
       return redirect('/Email_list')->with('success','Group Added Successfully');
   }


   public function from_list(){
    // $Email_list = EmailList::all();
    $from_list = DB::table('froms')->where('user_id',auth::user()->id)->simplePaginate(100);
    return view('from_list',compact('from_list'));
}


public function from_make(){
    $group = group::where('user_id',auth::user()->id)->get();
    
    return view('from_make',compact('group'));
}


public function from_post(Request $request){

        
    $from = new from;
    $from->name     = $request->name;
    $from->group_id     = $request->group_id;
    $from->user_id  = auth::user()->id;
    $from->save();

    return redirect('/from_list')->with('success','From Added Successfully');
}

   

   public function from($id)
   {
   $from = from::find($id);
   
   return view('from',compact('from'));
   }


   public function from_user_post(Request $request,$id){

        
    $from = from::find($id);
    
    $EmailList = new EmailList;
    $EmailList->first_name     = $request->name;
    $EmailList->email     = $request->email;
    $EmailList->user_id  = auth::user()->id;
    $EmailList->group_id     = $from->group_id;
    $EmailList->save();

    return back()->with('success','Successfully Added ');
}




 

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\invoice;
use App\Models\group;
use App\Models\EmailList;
use App\Models\Message;
use App\Models\MessageLead;
use Auth;
use App\Models\Smtp;
class HomeController extends Controller
{

    public function main()
    {
        return redirect('/login')->with('success','Successfully');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $invoice = invoice::where('user_id',auth::user()->id)->where('paid',0)->count();
        $EmailList = EmailList::where('user_id', auth::user()->id)->count();
        $Smtp = Smtp::where('user_id', auth::user()->id)->count();
        $Message = Message::where('user_id', auth::user()->id)->count();
        $pendingLead = MessageLead::where('user_id', auth::user()->id)->where('status', 0)->count();
        $lastmc = Message::where('user_id', auth()->user()->id)->latest()->first();
        // $lastopen = MessageLead::where('user_id', auth::user()->id)->where('open', 1)->where('message_id', $lastmc->id)->count();
        

        $lastopen = 0;
        
        if ($lastmc) {
            $lastopen = MessageLead::where('user_id', auth()->user()->id)
                ->where('open', 1)
                ->where('message_id', $lastmc->id)
                ->count();
        }
        
     
        return view('home',compact('EmailList','invoice','Smtp','Message','pendingLead','lastopen'));
    }

    public function test()
    {
        return view('test');
    }


}

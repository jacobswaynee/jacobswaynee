<?php

namespace App\Http\Controllers;


use App\Mail\MessageCouple;
use App\Mail\RSVP;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Mail;

class ComingSoonController extends Controller
{
    //

    public function index()
    {
        $launch_date = Carbon::parse('05/04/2022', 'GMT+2', '');


        return view('coming_soon.index', ['daysRemaining'=>Carbon::now()->diff($launch_date)->days]);

    }

    public function rsvp(Request $request)
    {


        if(Mail::to('rsvps@brightandmarv.co.za')->send(new RSVP($request))){
            return redirect(route('home').'#rsvp')->with(['status_code'=>200]);
        }

        return redirect()->back()->with(['status_code'=>500]);
    }

    public function message(Request $request)
    {

        if(Mail::to('mvmasaiti@gmail.com')->send(new MessageCouple($request))){
            return redirect(route('home').'#msg')->with(['msg_status_code'=>200]);
        }

        return redirect()->back()->with(['msg_status_code'=>500]);
    }
}

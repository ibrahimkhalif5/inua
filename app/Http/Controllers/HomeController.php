<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\Partner;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
    $gal = Gallery::latest()->take(4)->get();
    $car=Career::get();
    $par=Partner::get();
    return view('frontend.home',compact("gal","car","par"));
    }
    public function aboutus()
    {
        return view('frontend.about');
    }
    public function gallery()
    {
    $gal = Gallery::get();
        return view('frontend.gallery',compact("gal"));
    }
    public function contact()
    {
        return view('frontend.contact');
    }

    public function contactus(Request $request) {
        $msg = new Message();
        
        $msg->name = $request->input('name');
        $msg->email = $request->input('email');
        $msg->message = $request->input('message');
    
        $msg->save();
        $request->session()->flash('success', 'Message Received. Thank you!');
    
    return redirect('/contact');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
   
}
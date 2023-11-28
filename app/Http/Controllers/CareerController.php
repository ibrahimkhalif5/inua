<?php

namespace App\Http\Controllers;

use App\Models\Job;

use App\Models\Career;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\University;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class CareerController extends Controller
{ 
public function home() {

    $gal=Gallery::get();
    $job=Career::get();
           
    return view('frontend.home',compact("gal","job"));

    }

   


 public function jobview(Request $request,$id)
    {
        $job = Career::findOrFail($id);
        // dd($property);

        return view('frontend.careerview')->with('Job', $job);
    }


    

public function contact() {
        
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

        public function gallery() {
    $gal=Gallery::get();
        
        return view('frontend.gallery',compact("gal"));
    
        }
public function about() {
        
            return view('frontend.aboutus');
        
            }

public function career() {

        $jobs = Career::where('type', 'jobs')->where('status','open') ->get();


        return view('frontend.career', compact('jobs'));
    
        }


public function intern() {

    $jobs = Career::where('type', 'intern')->where('status','open') ->get();


        return view('frontend.intern', compact('jobs'));
    
        }


public function training() {

    $jobs = Career::where('type', 'training')->where('status','open') ->get();


    return view('frontend.training', compact('jobs'));

    }


public function reg() {

    return view('frontend.pwd_registration');
    

    }



    public function application() {

        return view('frontend.app_instructions');
        
    
        }


    
}
<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use Validator;
use App\Models\donar_registration;

class ContactController extends Controller
{
    public function contactindex()
    {
        $contact_us = ContactUs::all();
        $latest=donar_registration::latest()->take(5)->get();
        return view('frontend.contact',compact('contact_us','latest'));

    }
    public function contact_us(Request $request)
   {

         $contact_us = new ContactUs;
         $contact_us->name = $request->name;
         $contact_us->email= $request->email;
         $contact_us->phone= $request->phone;
         $contact_us->address= $request->address;
         $contact_us->message= $request->message;
         $contact_us->save();
         return redirect()->back()->with('message','We will contact you soon');
        }

        }





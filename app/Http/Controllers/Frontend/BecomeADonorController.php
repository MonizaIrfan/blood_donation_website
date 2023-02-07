<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\donar_registration;
use Illuminate\Http\Request;
use validator;


class BecomeADonorController extends Controller
{
    public function BecomeADonorindex()
    {
        // $donar_registration=donar_registration::all();
        $latest=donar_registration::latest()->take(5)->get();
        return view('frontend.become-a-donor',compact('latest'));
    }
    public function Donar_register(Request $request)
    {

        $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=500,height=500',
        'donar_name'=>'required|max:25',
        'location'=>'required',
        'age'=>'required',
        'donar_email'=>'required|email|unique:donar_registrations,donar_email',
        'mobile'=>'required|max:15',

            ]);
        $donar_registration = new donar_registration;
        $donar_registration->donar_name = $request->donar_name;
        $donar_registration->mobile= $request->mobile;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images',$imagename);
        $donar_registration->image=$imagename;
        $donar_registration->age= $request->age;
        $donar_registration->blood_group= $request->blood_group;
        $donar_registration->gender= $request->gender;
        $donar_registration->donar_email= $request->donar_email;
        $donar_registration->location= $request->location;
        $donar_registration->save();
        return redirect()->route('index')->with('message','You are a register user now');
       }

    }



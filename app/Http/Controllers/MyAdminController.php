<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BloodGroup;
use App\Models\Cities;
use App\Models\Pages;
use Hash;

class MyAdminController extends Controller
{    /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
       $this->middleware('auth:admin');
   }

   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
   public function dashbaord_index()
   {
    $blood_groups=BloodGroup::all();
    $donar_registrations=donar_registration::all();
    return view('admin.dashboard.index',compact('blood_groups','donar_registrations'));
   }
}




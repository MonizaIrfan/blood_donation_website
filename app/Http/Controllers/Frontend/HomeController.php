<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\donar_registration;
use App\Models\Cities;
use App\Models\BloodGroup;
use DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $city = Cities::get();
        $bloodgroup = BloodGroup::all();
        $search=new donar_registration;
        $search->donar_id=$request->donar_id;
        $donar_registrations=donar_registration::paginate(6);
        $total_donor=donar_registration::all()->count();
        $latest=donar_registration::latest()->take(5)->get();
        return view('frontend.index',compact('donar_registrations','total_donor','latest','city','bloodgroup','search'));

    }


}




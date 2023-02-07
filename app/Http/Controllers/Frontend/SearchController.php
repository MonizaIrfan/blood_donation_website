<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\donar_registration;
use App\Models\BloodGroup;
use App\Models\Cities;

class SearchController extends Controller
{
    public function search_donor(Request $request)
    {
        if(isset($request->location) || isset($request->blood_group))
        {
            $query=$request->input('blood_group','location');
            $search = donar_registration::where('location', 'like', "%$query%")->orWhere('blood_group', 'like', "%$query%")->get();
            $donar_registrations=donar_registration::paginate(6);
            $latest=donar_registration::latest()->take(5)->get();
            return view('frontend.search-donor',compact('search','latest','donar_registrations'));
           }


        else{
        return redirect()->route('index')->with('message','Please fill the required field you want to search');

        }


    }

}

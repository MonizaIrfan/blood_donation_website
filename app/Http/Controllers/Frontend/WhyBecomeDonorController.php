<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\donar_registration;

class WhyBecomeDonorController extends Controller
{
    public function WhyBecomeDonorindex()
    {
        $detail=Pages::where('slug','why-become-donor')->first();
        $latest=donar_registration::latest()->take(5)->get();
        return view('frontend.why-become-donor',compact('detail','latest'));
    }
}

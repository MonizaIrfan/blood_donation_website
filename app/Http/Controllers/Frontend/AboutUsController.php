<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\donar_registration;

class AboutUsController extends Controller
{
    public function AboutUsindex()
    {
        $page=Pages::where('slug','about-us')->first();
        $latest=donar_registration::latest()->take(5)->get();
        return view('frontend.about-us',compact('page','latest'));
    }
}

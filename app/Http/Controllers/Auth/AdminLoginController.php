<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\donar_registration;
use App\Models\BloodGroup;
use App\Models\Admin;

class AdminLoginController extends Controller
{
    public function __construct()
    {
    //    $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('Auth.login');
    }
    public function login(Request $request)
    {
        $this->validate($request,[
        'email'=>'required|email',
        'password'=>'required|min:6'

        ]);
        // dd($request->all());
        if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password])){

            return redirect()->route('dashboard_index');
            }else{
        return redirect()->back()->withInput($request->only('email','remember'));

    }

    }
}

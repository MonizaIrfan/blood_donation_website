<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Models\donar_registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\BloodGroup;
use App\Models\Cities;
use App\Models\Pages;
use App\Models\ContactUs;
use Hash;


class AdminController extends Controller
{
    /*public function Admin_index()
    {
        $admin=Admin::all();
        return view('admin.login.admin_login_index',compact('admin'));
    }*/

    public function dashboard_index()
    {
        $blood_groups=BloodGroup::all();
        $donar_registrations=donar_registration::all();
        $latest=donar_registration::latest()->take(8)->get();
        return view('admin.dashboard.index',compact('blood_groups','donar_registrations','latest'));
    }
    public function Donor_list(Request $request)
    {
        $donar_registrations = donar_registration::all();
        return view('admin.donors.list',compact('donar_registrations'));

    }

    public function Donor_create()
    {
        $blood_groups=BloodGroup::all();
        return view('admin.donors.create',compact('blood_groups'));
    }
    public function Donor_edit($donar_id)
    { //for showing blood groups in edit page
        $blood_groups=BloodGroup::all();
        //for calling edit function by id
        $donar_registrations = donar_registration::find($donar_id);
        return view('admin.donors.edit',compact('donar_registrations','blood_groups'));
    }
    public function list_cities()
    {
        $cities=Cities::all();
        return view('admin.cities.list_cities',compact('cities'));

    }
    public function create_cities()
    {
        return view('admin.cities.create_cities');


    }
    public function edit_cities()
    {
        return view('admin.cities.edit_cities');


    }
    public function list_blood()
    {   $blood_groups=BloodGroup::all();
        return view('admin.blood_group.list_blood',compact('blood_groups'));

    }
    public function create_blood()
    {
        return view('admin.blood_group.create_blood');


    }
    public function edit_blood($bg_id)
    {
        $blood_group = BloodGroup::find($bg_id);
        return view('admin.blood_group.edit_blood',compact('blood_groups'));
    }

        public function list_pages()
        {
            $page=Pages::all();
            return view('admin.pages.list_pages',compact('page'));

        }
        public function create_pages()
        {
             $page=Pages::all();
            return view('admin.pages.create_pages',compact('page'));


        }
        public function create_why_become_donor()
        {
            return view('admin.pages.create_why_become_donor');


        }
        public function edit_pages($id)
        {
            $page = Pages::find($id);
            return view('admin.pages.edit_pages',compact('page'));


        }
        // Detail Page
        public function detail_pages($slug)
        {
            $detail = Pages::where('slug',$slug)->first();
            $latest=donar_registration::latest()->take(5)->get();
            return view('frontend.why-become-donor',compact('detail','latest'));
        }

                //For Donor
                  public function InsertDonar(Request $request)
                  {
                  $request->validate([
                  'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=500,height=500',
                  'donar_name'=>'required|max:25',
                  'location'=>'required|max:15',
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
                  return redirect()->route('Donor_list')->with('message','The user is register successfully');
                  }
                  public function delete_donar($donar_id)
                  {

                   $donar_registration=donar_registration::find($donar_id);
                   $donar_registration->delete();
                   return redirect()->back()->with('message', 'Donor deleted successfully');
                  }

                  public function update_donor(Request $request,$donar_id)
                  {
                     $donar_registration=donar_registration::find($donar_id);
                     $donar_registration->donar_name = $request->donar_name;
                     $donar_registration->mobile= $request->mobile;
                     $image=$request->image;
                     if($image)
                    {
                        $image=$request->image;
                        $imagename=time().'.'.$image->getClientOriginalExtension();
                        $request->image->move('images',$imagename);
                        $donar_registration->image=$imagename;
                    }
                     $donar_registration->age= $request->age;
                     $donar_registration->blood_group= $request->blood_group;
                     $donar_registration->gender= $request->gender;
                     $donar_registration->donar_email= $request->donar_email;
                     $donar_registration->location= $request->location;
                     $donar_registration->save();
                     return redirect()->back()->with('message','Donor updated Successfully');


                  }
                //End Donor
                //For blood groups
                   public function create_blood_group(Request $request)
                   {
                    $request->validate([
                        'bg_name' => 'required',
                    ]);
                        $blood_group = new BloodGroup;
                        $blood_group->bg_name = $request->bg_name;
                        $blood_group->save();
                        return redirect()->route('list_blood')->with('message','Blood Group Added Successfully');


                }
                    public function delete_blood_group($bg_id)
                    {

                    $blood_group=BloodGroup::find($bg_id);
                    $blood_group->delete();
                    return redirect()->back()->with('message', 'Blood Group deleted successfully');
                    }
                    public function update_blood_group(Request $request,$bg_id)
                    {
                      $blood_group=BloodGroup::find($bg_id);
                      $blood_group->bg_name = $request->bg_name;
                      $blood_group->save();
                      return redirect()->back()->with('message','Blood Group updated Successfully');

                     }
                   //End Blood Groups
                    //For cities
                    public function create_city(Request $request)
                    {
                        $request->validate([
                            'city_name' => 'required',
                        ]);
                            $city = new Cities;
                            $city->city_name = $request->city_name;
                            $city->save();
                            return redirect()->route('list_cities')->with('message','City Added Successfully');


                    }
                    public function delete_city($id)
                    {

                       $city=Cities::find($id);
                       $city->delete();
                       return redirect()->back()->with('message', 'City deleted successfully');
                    }
                    public function create_page(Request $request)
                    {
                            $page = new Pages;
                            $page->title = $request->title;
                            $page->slug = $request->slug;
                            $page->description = $request->description;
                            $page->save();
                            return redirect()->back()->with('message', 'Content added successfully');

                    }
                    public function update_page(Request $request,$id)
                    {
                            $page= Pages ::find($id);
                            $page->title = $request->title;
                            $page->description = $request->description;
                            $page->save();
                            return redirect()->back()->with('message', 'Content updated successfully');

                    }
                    public function contact_us()
                    {
                        $contact_us = ContactUs::all();
                        return view('admin.contact_us.contact_us',compact('contact_us'));
                    }
                    public function delete_contact_us($id)
                    {

                       $contact_us=ContactUs::find($id);
                       $contact_us->delete();
                       return redirect()->back()->with('message', 'Donor message deleted successfully');
                    }


                }



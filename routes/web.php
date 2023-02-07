<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\BecomeADonorController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\WhyBecomeDonorController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\MyAdminController;
use Illuminate\Support\Facades\Auth;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Frontend Routes
Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/about-us',[AboutUsController::class,'AboutUsindex'])->name('AboutUsindex');
Route::get('/contact',[ContactController::class,'contactindex'])->name('contactindex');
Route::get('/why-become-donor',[WhyBecomeDonorController::class,'WhyBecomeDonorindex'])->name('WhyBecomeDonorindex');
Route::get('/become-a-donor',[BecomeADonorController::class,'BecomeADonorindex'])->name('BecomeADonorindex');
Route::post('/become-a-donor',[BecomeADonorController::class,'Donar_register'])->name('Donar_register');
Route::post('/contact',[ContactController::class,'contact_us'])->name('contact_us');
Route::get('/search-donor',[SearchController::class,'search_donor'])->name('search_donor');



Auth::routes();
//Admin Routes
//Route::get('/admin_login', [App\Http\Controllers\HomeController::class, 'index'])->name('admin_login');
Route::prefix('admin')->group(function(){
//Route::get('/admin_login_index',[AdminController::class,'Admin_index'])->name('Admin_index');
Route::get('/login',[AdminLoginController::class,'showLoginForm'])->name('showLoginForm');
Route::POST('/login',[AdminLoginController::class,'login'])->name('login');
Route::post('/logout',[App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');


//Route::get('/index',[MyAdminController::class,'dashbaord_index'])->name('dashboard_index');
Route::group(['middleware'=>"web"],function () {

Route::get('/index',[AdminController::class,'dashboard_index'])->name('dashboard_index');
Route::get('/list',[AdminController::class,'Donor_list'])->name('Donor_list');
Route::get('/edit/{donar_id}',[AdminController::class,'Donor_edit'])->name('Donor_edit');
Route::get('/list_cities',[AdminController::class,'list_cities'])->name('list_cities');
Route::get('/create_cities',[AdminController::class,'create_cities'])->name('create_cities');
Route::get('/edit_cities',[AdminController::class,'edit_cities'])->name('edit_cities');
Route::get('/list_blood',[AdminController::class,'list_blood'])->name('list_blood');
Route::get('/create_blood',[AdminController::class,'create_blood'])->name('create_blood');
Route::get('/edit_blood',[AdminController::class,'edit_blood'])->name('edit_blood');
Route::get('/list_pages',[AdminController::class,'list_pages'])->name('list_pages');
Route::get('/create_pages',[AdminController::class,'create_pages'])->name('create_pages');
Route::get('/edit_pages/{id}',[AdminController::class,'edit_pages'])->name('edit_pages');
Route::get('/detail_pages/{slug}',[AdminController::class,'detail_pages'])->name('detail_pages');
Route::get('/create',[AdminController::class,'Donor_create'])->name('Donor_create');
Route::POST('/create',[AdminController::class,'InsertDonar'])->name('InsertDonar');
Route::get('/delete_donar/{donar_id}', [AdminController::class,'delete_donar'])->name('delete_donar');
Route::post('/update_donor/{donar_id}', [AdminController::class,'update_donor'])->name('update_donor');
Route::POST('/create_blood',[AdminController::class,'create_blood_group'])->name('create_blood_group');
Route::get('/delete_blood_group/{bg_id}', [AdminController::class,'delete_blood_group'])->name('delete_blood_group');
Route::POST('/create_cities',[AdminController::class,'create_city'])->name('create_city');
Route::get('/delete_cities/{id}', [AdminController::class,'delete_city'])->name('delete_city');
Route::POST('/create_pages', [AdminController::class, 'create_page'])->name('create_page');
Route::Post('/update_page/{id}', [AdminController::class, 'update_page'])->name('update_page');
Route::get('/contact_us',[AdminController::class, 'contact_us'])->name('contact_us_admin');
Route::get('/delete_contact_us/{id}', [AdminController::class,'delete_contact_us'])->name('delete_contact_us');


});
});




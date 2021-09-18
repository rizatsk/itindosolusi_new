<?php

use App\Http\Controllers\kirimPesan;
use App\Http\Controllers\pageAdminController;
use Illuminate\Support\Facades\Route;
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

/*  
Ketika Login sebagai admin larikan ke halaman adminItindosolution
Jika Bukan , Larikan ke halaman dashboardItindosolution
*/

// Function for loginPageAdmin
function loginAdminController($page){
    if (Auth::user()->accses === 'admin'){
        return view($page);
    }else{return view('index');};
}

// Login For Admin
Route::group(['middleware' => 'auth:sanctum'],function(){
    Route::get('/dashboard', function(){ return loginAdminController('admin/dashboard-admin');})->name('dashboard');
    // Route::get('/admin-forms', function(){ return loginAdminController('admin/formsAdmin');})->name('formsAdmin');
    Route::get('/profile',function(){ return loginAdminController('profile/show');})->name('profile');
});

Route::get('/', function () {return view('index');})->name('home');

// Itindosolution User
Route::get('/portfolio-details', function () {return view('portfolio-details');})->name('portoflio-details');
Route::get('/inner-page', function () {return view('inner-page');})->name('inner-page');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

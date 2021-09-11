<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

/*  
Ketika Login sebagai admin larikan ke halaman adminItindosolution
Jika Bukan , Larikan ke halaman dashboardItindosolution
*/

Route::group(['middleware' => 'auth:sanctum'],function(){
    Route::get('/dashboard',function(){ if (Auth::user()->accses === 'admin'){return view('dashboard');}
                                        else{return view('index');}
    })->name('dashboard');
    Route::get('/profile',function(){ if (Auth::user()->accses === 'admin'){return view('profile/show');}
                                        else{return view('index');}
    })->name('profile');
});

Route::get('/', function () {return view('welcome');})->name('home');

// Itindosolution User
Route::get('/portfolio-details', function () {return view('portfolio-details');})->name('portoflio-details');
Route::get('/inner-page', function () {return view('inner-page');})->name('inner-page');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

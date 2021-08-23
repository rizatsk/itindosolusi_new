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

Route::group(['middleware' => 'auth:sanctum'],function(){
    Route::get('/dashboard',function(){ if (Auth::user()->accses === 'admin'){return view('dashboard');}
                                        else{return view('error/404');}
    })->name('dashboard');
    Route::get('/profile',function(){ if (Auth::user()->accses === 'admin'){return view('profile/show');}
                                        else{return view('error/404');}
    })->name('profile');
});

Route::get('/', function () {return view('welcome');})->name('home');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

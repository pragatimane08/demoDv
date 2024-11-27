<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'home')->name('home');

Route::view('/company-profile', 'company-profile')->name('company-profile');

Route::view('/team', 'team')->name('team');

Route::view('/equity', 'equity')->name('equity');

Route::view('/mutual-funds', 'mutual-funds')->name('mutual-funds');

Route::view('/fixed-deposits', 'fixed-deposits')->name('fixed-deposits');

Route::view('/seminars', 'seminars')->name('seminars');

Route::view('/newsletter', 'newsletter')->name('newsletter');

Route::view('/downloads', 'downloads')->name('downloads');

Route::view('/blogs', 'blogs')->name('blogs');

Route::view('/contact-us', 'contact-us')->name('contact-us');

Route::view('/login-page', 'login-page')->name('login-page');
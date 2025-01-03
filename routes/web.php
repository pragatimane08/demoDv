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

Route::view('/pms-aif', 'pms-aif')->name('pms-aif');

Route::view('/fixed-deposits', 'fixed-deposits')->name('fixed-deposits');

Route::view('/bonds', 'bonds')->name('bonds');

Route::view('/wealth-management', 'wealth-management')->name('wealth-management');
Route::view('/financial-planning', 'financial-planning')->name('financial-planning');
Route::view('/tax-planning', 'tax-planning')->name('tax-planning');
Route::view('/portfolio-restucturing', 'portfolio-restucturing')->name('portfolio-restucturing');
Route::view('/child-future-saving', 'child-future-saving')->name('child-future-saving');
Route::view('/retirmentplanning','retirmentplanning')->name('retirmentplanning');
Route::view('/seminars', 'seminars')->name('seminars');

Route::view('/newsletter', 'newsletter')->name('newsletter');
Route::view('/financial-calculator', 'financial-calculator')->name('financial-calculator');

Route::view('/downloads', 'downloads')->name('downloads');

Route::view('/blogs', 'blogs')->name('blogs');
//blogsingle.blade.php
//blogsingle.blade.php
Route::view('/blogsingle', 'blogsingle')->name('blogsingle');

Route::view('/learning', 'learning')->name('learning');
Route::view('/kyc', 'kyc')->name('kyc');


Route::view('/contact-us', 'contact-us')->name('contact-us');
// resources/views/schedulemeeting.blade.php
Route::view('/schedulemeeting','schedulemeeting')->name('schedulemeeting');
Route::view('/opendemata','opendemata')->name('opendemata');

Route::view('/login-page', 'login-page')->name('login-page');
Route::view('/pms-aif', 'pms-aif')->name('pms-aif');
Route::view('/login-page', 'login-page')->name('login-page');

// routes/web.php
Route::get('/sip-calculator', function () {
    return view('sip-calculator');
})->name('sip-calculator');

//resources/views/retirementcal.blade.php
Route::get('/retirementcal', function () {
    return view('retirementcal');
})->name('retirementcal');


//resources/views/educationcal.blade.php
Route::get('/educationcal', function () {
    return view('educationcal');
})->name('educationcal');

//resources/views/marriage.blade.php
Route::get('/marriage', function () {
    return view('marriage');
})->name('marriage');

//resources/views/sip_delay.blade.php
Route::get('/sip_delay', function () {
    return view('sip_delay');
})->name('sip_delay');

//resources/views/sip_stepup.blade.php
Route::get('/sip_stepup', function () {
    return view('sip_stepup');
})->name('sip_stepup');

//resources/views/lumpsum.blade.php
Route::get('/lumpsum', function () {
    return view('lumpsum');
})->name('lumpsum');

//resources/views/emi.blade.php
Route::get('/emi', function () {
    return view('emi');
})->name('emi');


use App\Http\Controllers\MeetingController;

Route::get('/schedule-meeting', [MeetingController::class, 'showForm'])->name('schedule.meeting.form');
Route::post('/schedule-meeting', [MeetingController::class, 'handleForm'])->name('schedule.meeting');


Route::get('/iframe-content', function () {
    return view('iframe-content'); // Return a Blade view
});
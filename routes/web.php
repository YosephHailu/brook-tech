<?php

use App\Models\Appointment;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

Route::get('/clear', function () {
    Artisan::call("cache:clear");
    Artisan::call("config:clear");
});

Auth::routes();

Route::get('mail', function () {
    return view('emails.mail')->with('appointment', Appointment::first());
});
Route::get('profile', 'App\Http\Controllers\PageController@registerForm');

Route::get('/', 'App\Http\Controllers\PageController@home');
Route::get('confirmed', 'App\Http\Controllers\PageController@confirmed');
Route::get('home', 'App\Http\Controllers\PageController@home');
Route::get('about', 'App\Http\Controllers\PageController@about');
Route::get('dashboard', 'App\Http\Controllers\PageController@dashboard');
Route::get('configuration', 'App\Http\Controllers\PageController@configuration');
Route::post('configuration', 'App\Http\Controllers\PageController@updateConfiguration');
Route::put('user/{user}', 'App\Http\Controllers\UserController@update');

Route::resource('appointment', 'App\Http\Controllers\AppointmentController');
Route::get('appointment/{appointment}/confirm', 'App\Http\Controllers\AppointmentController@confirm');

Route::resource('appointment-status', 'App\Http\Controllers\AppointmentStatusController');
Route::resource('photo-gallery', 'App\Http\Controllers\PhotoGalleryController');
Route::resource('news', 'App\Http\Controllers\NewsController');
Route::resource('service', 'App\Http\Controllers\ServiceController');
Route::resource('feedback', 'App\Http\Controllers\FeedbackController');
Route::resource('subscription', 'App\Http\Controllers\SubscriptionController');
Route::resource('staff', 'App\Http\Controllers\StaffController');
Route::resource('client', 'App\Http\Controllers\ClientController');

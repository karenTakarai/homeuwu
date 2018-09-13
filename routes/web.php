<?php
use App\User;
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

Route::get('/', function () {
    return view('landing');
});

Route::get('dashboard', function () {
    return view('layouts/dashboard');
});

Route::get('hoster', function () {
    return view('hoster');
});

Route::get('places', function () {
    return view('places');
});

Route::get('place', function () {
    return view('newplace/place');
});

Route::get('distribution', function () {
    return view('newplace/distribution');
});

Route::get('services', function () {
    return view('newplace/services');
});

Route::get('location', function () {
    return view('newplace/location');
});

Route::get('rules', function () {
    return view('newplace/rules');
});

Route::get('agenda', function () {
    return view('newplace/agenda');
});

Route::get('quotation', function () {
    return view('newplace/quotation');
});

Route::get('main', function () {
    return view('layouts/home');
});

Route::get('payment', function () {
    return view('users/payment');
});

Route::get('security', function () {
    return view('users/security');
});

Route::get('historial', function () {
    return view('users/historial');
});

Route::get('privacy', function () {
    return view('users/privacy');
});

Route::get('profile', function () {
    return view('users/info');
});

Route::get('evaluation', function () {
    return view('users/evaluation');
});

Route::get('info', function () {
    return view('users/info');
});

Route::get('photos', function () {
    return view('users/photos');
});

Route::get('placeview', function () {
    return view('placeview');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('home', 
function () 
{   return view('home',['users' => User::all()]); }

);
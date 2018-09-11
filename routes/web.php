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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('home', 
function () 
{   return view('home',['users' => User::all()]); }

);
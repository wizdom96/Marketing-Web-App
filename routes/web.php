<?php

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
    return view('layout');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('advertise', function () {
    return view('advertise');
});

Route::get('register', function () {
    return view('register');
});

Route::get('login', function () {
    return view('login');
});

  Route::get('login', 'AuthController@index');
  Route::post('post-login', 'AuthController@postLogin'); 
  Route::get('register', 'AuthController@registration');
  Route::post('post-register', 'AuthController@postRegistration'); 
  Route::get('dashboard', 'AuthController@dashboard'); 
  Route::get('logout', 'AuthController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

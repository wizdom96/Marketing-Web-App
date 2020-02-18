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
    return view('index');
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

Route::get('product', function () {
    return view('index');
});


Route::get('login', function () {
    return view('login');
});
Route::get('post-content', function () {
    return view('postContent');
});


  Route::get('login', 'AuthController@index');
  Route::post('post-login', 'AuthController@postLogin'); 
  Route::get('register', 'AuthController@registration');
  Route::post('post-register', 'AuthController@postRegistration'); 
  Route::get('dashboard', 'AuthController@dashboard'); 
  Route::post('post-content','postContent@insertPost');
  
  Route::get('/', 'advertise@index'); 
  Route::get('product/{id}','advertise@view_product');



 Route::get('/addpost','Postaddcontroller@index');
 Route::post('/addcontent', 'Postaddcontroller@store')->name('addcontent');
 

Route::get('logout', 'AuthController@logout');

Auth::routes();
Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/approvead/{id}','HomeController@approvead')->name('approve');
Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home');

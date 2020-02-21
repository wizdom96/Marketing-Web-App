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
  Route::post('user-registration', 'AuthController@userRegistration'); 

  Route::get('dashboard/', 'AuthController@dashboard');
  Route::get('dashboard/newad',array('as'=>'myform','uses'=>'Postaddcontroller@myform'));
  Route::get('dashboard/newad/ajax/{id}','Postaddcontroller@myformAjax');
  Route::post('dashboard/postadd', 'Postaddcontroller@store')->name('postadd');

  Route::post('dashboard/make','advertise@createmake');
  Route::get('dashboard/make','advertise@viewmake');
  Route::post('dashboard/makemodel','advertise@createmakemodel');
  Route::get('dashboard/makemodel','advertise@viewmake');

  
  Route::get('dashboard/allusers', 'Authcontroller@allusers')->name('allusers');
  Route::get('dashboard/{user_id}', 'AuthController@viewads')->name('account'); 

  Route::get('dashboard/update/{user_id}', 'AuthController@showform')->name('showform'); 
  Route::post('dashboard/update/{user_id}', 'AuthController@storeform')->name('storeform'); 

  Route::get('dashboard/updatepassword/{user_id}', 'AuthController@passwordform')->name('passwordform'); 
  Route::post('dashboard/updatepassword/{user_id}', 'AuthController@passwordstore')->name('changepassword'); 

  Route::post('post-content','postContent@insertPost');
  
  Route::get('/', 'advertise@index'); 
  Route::get('product/{id}','advertise@view_product');
  

 Route::post('dashboard/newad', 'Postaddcontroller@store')->name('addcontent');
 

Route::get('logout', 'AuthController@logout');

Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/approvead/{id}','HomeController@approvead')->name('approve');
Route::get('/deletead/{id}','HomeController@deletead')->name('delete');
Route::get('/dashboard/allusers/delete/{id}','HomeController@deleteuser')->name('delete');


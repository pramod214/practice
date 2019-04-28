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
    return view('welcome');
});

Auth::routes();

Route::match(['get','post'],'/adminlogin','AdminController@login')->name('admin.login');

Route::group(['middleware' => ['auth']],function(){
    Route::get('/admindashboard','AdminController@dashboard')->name('admin.dashboard');

});

Route::get('/logout','AdminController@logout')->name('admin.logout');

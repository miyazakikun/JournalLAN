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
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'auth'], function(){
    Route::get('admin/profile/{id}','HomeController@profile');
    Route::post('admin/profile/{id}','HomeController@updateprofile');
    Route::resource('journals', 'journalController');
    // Route::group(['middleware'=>''], function(){
    //
    // });
});

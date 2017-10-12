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

    Route::group(['prefix'=>'user'], function(){
        Route::post('{role}','userController@store')->name('user.store');
        Route::get('{role}/','userController@index')->name('user.index');
        Route::get('{role}/create','userController@create')->name('user.create');
        Route::get('{role}/{user}','userController@show')->name('user.show');
        Route::delete('{user}','userController@destroy')->name('user.destroy');
        Route::patch('{user}','userController@update')->name('user.update');
        Route::get('{role}/edit/{user}','userController@edit')->name('user.edit');
    });

    // Route::group(['middleware'=>''], function(){
    //
    // });
});

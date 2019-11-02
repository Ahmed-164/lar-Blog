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

Route::get('/','PostController@show')->name('home');


//Posts Routes

Route::get('createpost/','PostController@create')->name('createpost');

Route::post('storepost/','PostController@store')->name('storepost');

Route::get('postdetaile/{id}/','PostController@detaile')->name('postdetaile');

Route::delete('postdelete/{id}/','PostController@destroy')->name('postdelete');

Route::get('editpost/{id}/','PostController@edit')->name('editpost');

Route::put('updatepost/{id}/','PostController@update')->name('updatepost');




Auth::routes();

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

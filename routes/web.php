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

Route::get('/','UserController@index')->name('home');
Route::get('/userlist','UserController@userlist')->name('userlist');

Route::post('/store','UserController@store')->name('store');

Route::get('/edit/{id}','UserController@edit')->name('edit');
Route::post('/update','UserController@update')->name('update');
Route::get('/view/{id}','UserController@view')->name('view');
Route::post('delete/{id}','UserController@delete')->name('delete');
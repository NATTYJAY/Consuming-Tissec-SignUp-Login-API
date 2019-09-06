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


Route::get('/', 'tissecSignController@index');
Route::get('/dashboard', 'tissecSignController@dashboard');
Route::post('regCurlIn', 'tissecSignController@signInCURL')->name('register');

Route::post('signCurlIn', 'tissecSignController@loginInCURL')->name('login');

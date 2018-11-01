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
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact.store');
Route::get('/thankyou/{name}','ContactController@thankyou')->name('thankyou');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

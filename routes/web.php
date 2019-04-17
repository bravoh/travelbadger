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

Route::get('/home', function () {
    return view('welcome');
});

Route::match(['get', 'post'],'routes','RouteController@index')->name('routes');
Route::match(['get', 'post'],'booking/{id}','BookingController@index')->name('book');
Route::match(['get', 'post'],'ticket/{id}','BookingController@ticket')->name('ticket');

Route::match(['get', 'post'],'admin','AdminController@index')->middleware("auth")->name('admin');
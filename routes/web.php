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
Route::get('/qqq', function () {
    return view('qqq');
});
Route::get('user/{id}', 'LoginController@register');
Route::get('/qwer', 'ShowController@register')->middleware('qwer');
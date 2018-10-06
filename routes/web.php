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
Route::get('user/register', 'LoginController@register');
Route::get('user/login', 'LoginController@login');
Route::get('/qwer', 'ShowController@register');
Route::get('/check/cookie', 'CheckController@checkcookie');
Route::get('/user/exit', 'ExitController@exitlogin');
Route::get('/add/likecircle', 'AddController@addcircle');
Route::get('/add/liketeam', 'AddController@addteam');
Route::get('/remove/liketeam', 'RemoveController@removeteam');
Route::get('/remove/likecircle', 'RemoveController@removeteam');



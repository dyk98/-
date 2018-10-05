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
Route::get('/qwer', 'ShowController@register');
//Route::get('/cookie' , 'UserCookie@RegisterCookie');
Route::get('cookie' , function () {
    return response('Hello Lol')->cookie(
        'mzl', 'mzlsb', 10
    );
});
//Route::get('check' , 'CheckUserCookie@CheckCookie');
Route::get('check', function(\Illuminate\Http\Request $request) {
    $cookie = $request->cookie('mzl');
    echo json_encode($cookie);
});
Route::get('add', function () {
    $minutes = 24 * 60;
    return response('欢迎来到 Laravel 学院')->cookie('name', '学院君', $minutes);
});

Route::get('get', function(\Illuminate\Http\Request $request) {
    $cookie = $request->cookie('name');
    dd($cookie);
});
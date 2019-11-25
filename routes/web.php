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

Route::get('/login', 'AccountController@getLogin');
Route::post('/login', 'AccountController@postLogin')->name('login');
Route::get('/register', 'AccountController@getRegister');
Route::post('/register', 'AccountController@postRegister')->name('register');
Route::post('/logout', function() {
    Auth::logout();
    return redirect('/');
});
Route::get('/logout', function() {
    Auth::logout();
    return redirect('/');
});

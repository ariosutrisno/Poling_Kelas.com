<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register-user', 'AuthRegisterController@register')->name('register-user');
Route::post('/register-user', 'AuthRegisterController@registerRequest')->name('registerRequest');
Route::get('/login-user', 'AuthLoginController@login')->name('login-user');
Route::post('/login-user', 'AuthLoginController@loginRequest')->name('loginRequest');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/poling', 'PolingController@index')->name('poling');
});

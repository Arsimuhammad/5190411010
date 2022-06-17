<?php

use Illuminate\Support\Facades\Route;

use APP\User;
use GuzzleHttp\Psr7\Request;

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

Route::get('/register', function () {
  return view('register');
});

Route::post('/simpanuser', function () {
    return view('register');
 });

 Route::get('/', function () {
    return view('login');
 });

 Route::post('/ceklogin', function () {
    return view('login');
 });

//Route::get('/register', 'AuthController@register');

//Route::post('/simpanuser', 'AuthController@simpanuser');

//Route::get('/', 'AuthController@login');

//Route::post('/ceklogin', 'AuthController@ceklogin');
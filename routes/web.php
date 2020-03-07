<?php

use Illuminate\Support\Facades\Route;

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
Route::put('/userinfo', 'HomeController@update')->name('userinfo');

Route::get('/step-1', 'HomeController@showstep1');
Route::post('/createstep1', 'HomeController@cteatestep1')->name('step1');

Route::get('/step-2', 'HomeController@showstep2');
Route::post('/createstep2', 'HomeController@cteatestep2')->name('step2');

Route::get('/step-3', 'HomeController@showstep3');
Route::get('/createstep3', 'HomeController@cteatestep3');



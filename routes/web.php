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

Route::get('/login', 'homeController@getLogin')->name('login');
Route::post('/login', 'homeController@login')->name('postLogin');

Route::get('/register', 'homeController@getRegister')->name('register');
Route::post('/register', 'homeController@register')->name('postRegister');

Route::get('/logout', 'homeController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/','homeController@index')->name('index');
    
    Route::get('/get-car-data','carDataController@getCarData');
    Route::resource('/car-data', 'carDataController');

    Route::resource('/selling-data', 'sellingDataController');

    Route::get('/report', 'reportController@index');
});

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

Route::group(['middleware' => ['auth']], function(){
    Route::get('/user', 'DemoController@userDemo')->name('user');
    Route::get('/permission-denied', 'DemoController@permisionDenied')->name('nopermission');
    Route::group(['middleware' => ['manager']], function(){
        Route::get('/manager', 'DemoController@managerDemo')->name('manager');
    });
});

Route::get('/home', 'HomeController@index')->name('home');

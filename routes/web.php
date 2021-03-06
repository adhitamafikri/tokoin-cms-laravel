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

Route::get('/', 'HomeController@index')->name('dashboard');

Auth::routes();

Route::get('/test', 'HomeController@test');

Route::prefix('/partners')->group(function() {
    Route::get('/', 'PartnerController@index')->name('partners');
});

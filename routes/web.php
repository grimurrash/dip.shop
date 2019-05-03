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

Route::get('/', 'SideController@index')->name('main');

Auth::routes();

// Pages
Route::get('/info/dostavka','SideController@dostavka')->name('dostavka');
Route::get('/info/oplata','SideController@oplata')->name('oplata');
Route::get('/info/politika','SideController@politika')->name('politika');
Route::get('/company','SideController@company')->name('company');
Route::get('/rent','SideController@rent')->name('rent');

// Profile
//middleware('auth')->
Route::prefix('profile')->name('profile.')->group(function (){
    Route::get('/','UserController@index')->name('index');
    Route::get('/orders','UserController@orders')->name('orders');
    Route::get('/wish','UserController@wish')->name('wish');
});

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

// Auth

Route::post('/login','Auth\LoginController@loginResponse')->name('login');
Route::post('/logout','Auth\LoginController@logout')->name('logout');
Route::post('/register','Auth\RegisterController@register')->name('register');

// Pages
Route::get('/info/dostavka', 'SideController@dostavka')->name('dostavka');
Route::get('/info/oplata', 'SideController@oplata')->name('oplata');
Route::get('/info/politika', 'SideController@politika')->name('politika');
Route::get('/company', 'SideController@company')->name('company');
Route::get('/rent', 'SideController@rent')->name('rent');

//Search
Route::get('search','SideController@search')->name('search');

//Order
Route::get('order','OrderController@create')->name('order.create');
Route::post('order','OrderController@store')->name('order.store');
Route::get('order/end',function (){
    return view('catalog.orderend');
})->name('order.end');


// Profile
Route::middleware('auth')->prefix('profile')->name('profile.')->group(function () {
    Route::get('/', 'UserController@index')->name('index');
    Route::get('/orders', 'UserController@orders')->name('orders');
    Route::get('/wish', 'UserController@wish')->name('wish');
});

// Catalog
Route::prefix('catalog')->name('catalog.')->group(function (){
   Route::get('/{subcategory}/','SubcategoryController@show')->name('show');
   Route::get('/','SubcategoryController@indexSub')->name('index');
   Route::get('/products/{product}','ProductController@show')->name('products.show');
});

//Basket
Route::prefix('cart')->name('cart.')->group(function (){
    Route::get('/','BasketController@show')->name('show');
    Route::get('/delete/{product}','BasketController@destroy')->name('delete');
    Route::get('/add/{product}','BasketController@addProduct')->name('add');
    Route::get('/remove/{product}','BasketController@removeProduct')->name('remove');
});

//Admin Route

Route::get('/admin/login', 'SideController@login_admin')->name('admin.login');
Route::post('/admin/login','Auth\LoginController@login')->name('admin.loginPost');



Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', 'SideController@admin')->name('index');

//    Resources
    Route::resource('categories','CategoryController');
    Route::resource('subcategories','SubcategoryController');
    Route::resource('products','ProductController');

//    Demo Template
    Route::prefix('demo')->name('demo.')->group(function () {
        Route::get('/elements', 'DemoController@elements')->name('elements');
        Route::get('/notifications', 'DemoController@notifications')->name('notifications');
        Route::get('/panels', 'DemoController@panels')->name('panels');
        Route::get('/dashboard', 'DemoController@dashboard')->name('dashboard');
        Route::get('/charts', 'DemoController@charts')->name('charts');
        Route::get('/icons', 'DemoController@icons')->name('icons');
        Route::get('/tables', 'DemoController@tables')->name('tables');
        Route::get('/typography', 'DemoController@typography')->name('typography');
        Route::get('/page-login', 'DemoController@pageLogin')->name('pageLogin');
        Route::get('/page-profile', 'DemoController@pageProfile')->name('pageProfile');
        Route::get('/page-lockscreen', 'DemoController@pageLockscreen')->name('pageLockscreen');
    });

});
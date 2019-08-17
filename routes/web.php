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

Route::get('/', 'PagesController@index')->name('home');
Route::get('/product/{id}', 'ProductController@show')->name('product.show');
Route::post('/checkout', 'CartController@checkout')->name('checkout');
Route::post('/subscribe', 'PagesController@subscribe')->name('subscribe');
Route::delete('/subscribe/{email}/destroy', 'PagesController@unsubscribe')->name('unsubscribe');

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
   return view('home');   
   });

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/shoppage', 'ShopController@index')->name('shoppage'); 

Route::resource('product','ShopController');


Route::get('/add-to-cart/{id}',[
    'uses' => 'ShopController@getAddToCart',
    'as' => 'product.addToCart'
    
    ]);

Route::get('/shoppingcart', 'ShopController@getCart')->name('shoppingcart'); 

Route::get('/checkout', 'ShopController@getCheckout')->name('checkout'); 

Route::post('/checkout', 'ShopController@postCheckout')->name('checkout'); 
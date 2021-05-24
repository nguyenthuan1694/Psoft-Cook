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

Route::get('/', 'HomeController@index')->name('home');
Route::resource('home', 'HomeController');
Route::get('/category/{slug}', 'HomeController@showCategory')->name('category');
Route::get('/products/{slug}', 'HomeController@showProduct')->name('product');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('/news-of-event', 'HomeController@showNewsIndex')->name('news-of-event');
Route::get('/news/{slug}', 'HomeController@showNews')->name('news');
Route::get('/introduce', 'HomeController@showIntroduce')->name('introduce');

Route::group(['prefix' => 'cart'], function () {
    Route::get('/', 'CartController@index')->name('cart.index');
    Route::get('/checkout', 'CartController@getCheckout')->name('cart.getCheckout');
    Route::post('/checkout', 'CartController@postCheckout')->name('cart.postCheckout');
    Route::post('/', 'CartController@add')->name('cart.add');
    Route::delete('/', 'CartController@remove')->name('cart.remove');
    Route::put('/', 'CartController@update')->name('cart.update');
    Route::post('/applyCoupon', 'CartController@applyCoupon')->name('cart.applyCoupon');
    Route::delete('/applyCoupon', 'CartController@removeCoupon')->name('cart.removeCoupon');
    Route::post('/getListDistrict', 'CartController@getListDistrict')->name('cart.getListDistrict');
    Route::post('/getListWard', 'CartController@getListWard')->name('cart.getListWard');
    Route::post('/updateShipping', 'CartController@updateShipping')->name('cart.updateShipping');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'AdminController@index')->name('admin.home');
    
    // Categories
    Route::resource('categories', 'CategoryController');
    // Products
    Route::resource('products', 'ProductController');
    Route::get('/product/trashed', 'ProductController@trashed')->name('product.trashed');
    Route::put('/products/{id}/restore', 'ProductController@restore')->name('products.restore');
    Route::delete('/products/{id}/forceDelete', 'ProductController@forceDelete')->name('products.forceDelete');
    Route::get('/products/{product}/images', 'ProductController@editImages')->name('products.editImages');
    Route::post('/products/{product}/images', 'ProductController@addImages')->name('products.addImages');
    Route::delete('/products/{product}/images/{image}', 'ProductController@deleteImage')->name('products.deleteImage');
    
    // NewsOfEvent
    Route::resource('news', 'NewsController');
    Route::get('/news-of-event/trashed', 'NewsController@trashed')->name('news-of-event.trashed');
    Route::put('/news/{id}/restore', 'NewsController@restore')->name('news.restore');
    Route::delete('/news/{id}/forceDelete', 'NewsController@forceDelete')->name('news.forceDelete');

    // Customers
    Route::resource('customers', 'CustomerController');
    Route::get('/customer/trashed', 'CustomerController@trashed')->name('customer.trashed');
    Route::put('/customers/{id}/restore', 'CustomerController@restore')->name('customer.restore');
    Route::delete('/customers/{id}/forceDelete', 'CustomerController@forceDelete')->name('customer.forceDelete');
    
    // profiles
    Route::resource('profiles', 'ProfileController');

    Route::put('/orders/{order}/updatePartial', 'OrderController@updatePartial')->name('orders.updatePartial');
    Route::resource('orders', 'OrderController');
    Route::resource('coupons', 'CouponController');
    
    
});


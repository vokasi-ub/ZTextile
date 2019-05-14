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

//DASHBOARD
Route::resource('dashboard','WelcomeController');
Route::get('/','WelcomeController@index');
Route::get('loginAdmin','WelcomeController@loginAdmin');
Route::get('order','WelcomeController@order');

//USER
Route::resource('user','UserController');
Route::get('/order','UserController@index');
Route::get('/order-form','UserController@order');
Route::post('/order-store','UserController@orderStore')->name('post.storeorder');
Route::get('/order-done','UserController@orderDone');

//ADMIN
Route::resource('admin','AdminController');
Route::get('/dashAdmin','AdminController@index');
	//item
	Route::get('/item-list','AdminController@itemIndex');
	Route::get('/item-create','AdminController@itemCreate');
	Route::post('/item-store','AdminController@itemStore')->name('post.store');
	Route::get('/item-search','AdminController@itemCari')->name('post.itemsearch');

//ADMIN
Route::resource('category','AdminCatController');
	//category
	Route::get('/cat-list','AdminCatController@catIndex');
	Route::get('/cat-create','AdminCatController@catCreate');
	Route::post('/cat-store','AdminCatController@catStore')->name('post.storecat');
	Route::get('/cat-search','AdminCatController@catCari')->name('post.catsearch');

//BUYER
Route::resource('buyer','BuyerController');
Route::get('/buyer-list','BuyerController@buyerIndex');
Route::get('/buyer-search','BuyerController@buyerCari')->name('post.buyersearch');

Auth::routes();
Route::get('home','HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('post.logout');

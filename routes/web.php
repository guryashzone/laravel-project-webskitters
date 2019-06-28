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

Route::get('','IndexController@index');
Route::get('/about','IndexController@about');
Route::get('/{id}/view','IndexController@packageView');
Route::get('contact','IndexController@contact');
Route::get('offers','IndexController@offers');
// Route::get('searchBox','IndexController@searchBox');
Route::post('search','IndexController@search');
Route::post('/book','IndexController@book');
Auth::routes();
Route::get('', 'HomeController@index')->name('index');

// Route::get('', function(){
	// return view('index');
// });

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


Route::resource('/products', 'ProductController');
Route::resource('/store-types', 'StoreController');

Route::resource('/articles', 'ArticleController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{qurystring?}', function (){
    return view('vue-home');
})->where('qurystring', '(.*)');

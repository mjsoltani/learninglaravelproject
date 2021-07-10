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

Route::get('/', 'HomeController@home');
Route::get('/articles/{articleSlug}' , 'ArticleController@single');
Route::get('/about', 'HomeController@about');
Route::get('/contact/asfaf/afasfal', 'HomeController@contact')->name('contact');

Route::prefix('admin')->namespace('Admin')->middleware('auth')->group(function() {
    Route::resource('articles' , 'ArticleController')->except(['show']);
});


Auth::routes();

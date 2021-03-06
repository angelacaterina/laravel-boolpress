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

// controller page
Route::get('/', 'PageController@home')->name('home');
Route::get('blog', 'PageController@blog')->name('blog');
Route::get('about', 'PageController@about')->name('about');

// resourse
Route::resource('articles', 'ArticleController');
Route::resource('categories', 'CategoryController');
Route::resource('tags', 'TagController');

// API
Route::get('articles_api', 'PageController@articles_api')->name('articles_api');
Route::get('categories_api', 'PageController@categories_api')->name('categories_api');
Route::get('tags_api', 'PageController@tags_api')->name('tags_api');
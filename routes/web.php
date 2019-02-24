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

Route::get('/', 'Home\HomeController@home');

Route::get('/about', 'Home\HomeController@about');

Route::get('/articles', 'Article\ArticleController@getArticles')->name('article.get');

Route::get('/pictures', 'Picture\PictureController@getPictures')->name('picture.get');

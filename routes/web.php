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

Route::get('/', 'AdminController@welcomefungsi') ;
Route::get('/base', 'AdminController@basefungsi') ;
Route::resource('/category', 'CategoryController');
Route::resource('/article', 'ArticleController');


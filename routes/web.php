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

Route::get('/', 'HomeController@Index')->name('/');
Route::get('/category', 'DatabaseController@GetCategory')->name('category');
Route::get('/detail', 'HomeController@Detail')->name('detail');
Route::get('/get-list', 'ModelController@GetList');
Route::get('/create', 'DatabaseController@CreateTable');
Route::get('/get-cate', 'DatabaseController@GetCategory');
Route::get('/indexAD', 'LoginController@admin')->name('admin');
Route::get('/login', 'LoginController@getLogin');
Route::post('/login', 'LoginController@postLogin');
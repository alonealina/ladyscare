<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\NokotsudoController@index')->name('index');
Route::get('category', 'App\Http\Controllers\NokotsudoController@category')->name('category');
Route::get('trouble', 'App\Http\Controllers\NokotsudoController@trouble')->name('trouble');
Route::get('trouble_detail', 'App\Http\Controllers\NokotsudoController@trouble_detail')->name('trouble_detail');
Route::get('ranking', 'App\Http\Controllers\NokotsudoController@ranking')->name('ranking');
Route::get('fav', 'App\Http\Controllers\NokotsudoController@fav')->name('fav');
Route::get('news', 'App\Http\Controllers\NokotsudoController@news')->name('news');
Route::get('news_detail', 'App\Http\Controllers\NokotsudoController@news_detail')->name('news_detail');
Route::get('contact', 'App\Http\Controllers\NokotsudoController@contact')->name('contact');
Route::post('mail_send', 'App\Http\Controllers\NokotsudoController@mail_send')->name('mail_send');
Route::get('mail_comp', 'App\Http\Controllers\NokotsudoController@mail_comp')->name('mail_comp');


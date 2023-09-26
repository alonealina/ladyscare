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

Route::get('member_regist', 'App\Http\Controllers\NokotsudoController@member_regist')->name('member_regist');
Route::get('member_comp', 'App\Http\Controllers\NokotsudoController@member_comp')->name('member_comp');


Route::get('contact', 'App\Http\Controllers\NokotsudoController@contact')->name('contact');
Route::post('mail_send', 'App\Http\Controllers\NokotsudoController@mail_send')->name('mail_send');
Route::get('mail_comp', 'App\Http\Controllers\NokotsudoController@mail_comp')->name('mail_comp');

Route::get('login', 'App\Http\Controllers\NokotsudoController@login')->name('login');
Route::post('login_method', 'App\Http\Controllers\NokotsudoController@login_method')->name('login_method');

Route::get('reminder', 'App\Http\Controllers\NokotsudoController@reminder')->name('reminder');
Route::post('reminder_send', 'App\Http\Controllers\NokotsudoController@reminder_send')->name('reminder_send');
Route::get('reminder_comp', 'App\Http\Controllers\NokotsudoController@reminder_comp')->name('reminder_comp');

Route::get('pass_rev', 'App\Http\Controllers\NokotsudoController@pass_rev')->name('pass_rev');
Route::post('pass_rev_method', 'App\Http\Controllers\NokotsudoController@pass_rev_method')->name('pass_rev_method');
Route::get('pass_rev_comp', 'App\Http\Controllers\NokotsudoController@pass_rev_comp')->name('pass_rev_comp');



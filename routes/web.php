<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\NokotsudoController@index')->name('index');
Route::get('category', 'App\Http\Controllers\NokotsudoController@category')->name('category');
Route::get('trouble', 'App\Http\Controllers\NokotsudoController@trouble')->name('trouble');
Route::get('contact', 'App\Http\Controllers\NokotsudoController@contact')->name('contact');
Route::post('mail_send', 'App\Http\Controllers\NokotsudoController@mail_send')->name('mail_send');
Route::get('mail_comp', 'App\Http\Controllers\NokotsudoController@mail_comp')->name('mail_comp');


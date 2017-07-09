<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('form', 'RequestController@index')->name('form');
Route::post('form', 'RequestController@store');
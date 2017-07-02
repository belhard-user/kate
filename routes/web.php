<?php

Auth::routes();

Route::group(['prefix' => 'db'], function($r){
    $r->get('insert', 'DbController@insert');
});

Route::get('/', 'HomeController@index')->name('home');

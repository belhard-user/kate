<?php

Auth::routes();

Route::group(['prefix' => 'db'], function($r){
    $r->get('insert', 'DbController@insert');
    $r->get('select', 'DbController@select');
    $r->get('update', 'DbController@update');
    $r->get('delete', 'DbController@delete');
});

Route::get('/', 'HomeController@index')->name('home');

<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'model'], function(){
    Route::get('all', 'ModelController@all');
    Route::get('create', 'ModelController@createRecord');
    Route::get('validate', 'ModelController@validateAction');
    Route::post('validate', 'ModelController@storeData');
    Route::get('relation', 'ModelController@relation');
    Route::get('belongs', 'ModelController@belongs');
});
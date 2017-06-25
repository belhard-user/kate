<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello-page/{name?}', function($name=123){
    return "Hello " . strtoupper($name);
})->where([
    'name' => '\d'
])->name('foo');

Route::get('url', function(){
    return route('foo', [
        'name' => 'Kate',
        'foo' => 'bar'
    ]);
});

Route::group(['prefix' => 'admin'], function(){
    Route::group(['prefix' => 'dashboard'], function(){
        Route::get('about', function(){
            return 'about';
        });
    });
    Route::get('user', function(){ return  'users'; });
    Route::get('portfolio', function(){ return  'portfolio'; });
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TestController@home')
    -> name('home');

Route::get('ospite/{id}', 'TestController@ospite')
    -> name('ospite');

Route::get('create/ospite', 'TestController@createOspite')
    -> name('createOspite');

Route::post('store/ospite', 'TestController@storeOspite')
    -> name('storeOspite');
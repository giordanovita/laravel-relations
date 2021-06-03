<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@home')
    ->name('home');

Route::get('/pilots{id}', 'MainController@pilots')
    ->name('pilots');

    Route::get('/create', 'MainController@create')
    ->name('create');
   
    Route::post('/store', 'MainController@store')
    ->name('store');
   
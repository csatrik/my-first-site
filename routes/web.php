<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teszt', function() {
    return view('teszt');
});

Route::get('/teszt', 'App\Http\Controllers\TesztController@teszt');

Route::get('/names', 'App\Http\Controllers\TesztController@names');
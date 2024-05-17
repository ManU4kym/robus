<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('auth', function () {
    return[
        'name' => 'john',
        'age' =>  17,
        'country' => 'Kenya',
        'country_code' => 254
    ];
});
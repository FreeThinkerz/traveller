<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); });
Route::get('/apropos', function () {
    return view('about');
});

Route::get('/?', function () {
    return view('welcome');
});

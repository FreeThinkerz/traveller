<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); });
Route::get('/apropos', function () {
    return view('about');
})->name('about');

Route::view('contacte', 'contact')->name('contact');

Route::get('/?', function () {
    return view('welcome');
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); })->name('home');
Route::get('/apropos', function () {
    return view('about');
})->name('about');

Route::view('contacte', 'contact')->name('contact');

Route::get('/?', function () {
    return view('welcome');
});

Route::view('register', 'register');
Route::post('register', function (Request $request) {
    $attributes = $request->validate();
});


Route::view('login', 'login')->name('login');
Route::post('login', function () {
    $attributes = collect(
        request()->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required', 'string'],
                'remember' => ['sometimes', 'boolean']
            ]
        )
    );

    if (! auth()->attempt($attributes->except('remember')->all(), $attributes->get('remember'))) {
        throw \Illuminate\Validation\ValidationException::withMessages(
            [
                'login' => 'Échèc de connexion. veillez consulter votre adresse e-mail et mot de passe.'
            ]
        );
    }

    request()->session()->regenerate();

    return redirect()->intended('/');
});

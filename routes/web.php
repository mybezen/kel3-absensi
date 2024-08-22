<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('splash');
});

Route::get('/login', function () {
    return view('login');
})->name('login-route');

Route::get('/dashboard', function () {
    return view('welcome');
})->name('');

Route::get('/register', function () {
    return view('register');
})->name('register-route');

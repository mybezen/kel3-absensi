<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.login');
})->name('login-route');

Route::get('/home', function () {
    return view('main.welcome');
})->name('');

Route::get('/register', function () {
    return view('main.register');
})->name('register-route');


Route::get('/logs', function () {
    return view('main.presencesuccess');
})->name('presences-route');
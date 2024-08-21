<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('splash');
});

Route::get('/some-page', function () {
    return view('some-page');
})->name('some-page-route');

Route::get('/dashboard', function () {
    return view('welcome');
})->name('');

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


Route::get('/logous', function () {
    return view('main.offpresence');
})->name('offpresence-route');


Route::get('/homi', function () {
    return view('main.out');
})->name('out-route');

Route::get('/logsuc', function () {
    return view('main.logsuccess');
})->name('logsucs-route');

Route::get('/report', function () {
    return view('main.reports');
})->name('report-route');

Route::get('/prform', function () {
    return view('main.presenceform');
})->name('prform-route');

Route::get('/plan', function () {
    return view('main.plan');
})->name('plan-route');

Route::get('/holi', function () {
    return view('main.holiday');
})->name('holiday-route');

Route::get('/shift', function () {
    return view('main.shift');
})->name('shift-route');

Route::get('/mess', function () {
    return view('main.messages');
})->name('messages-route');

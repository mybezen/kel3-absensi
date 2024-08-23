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


Route::get('/logsuc', function () {
    return view('main.logsuccess');
})->name('logsucs-route');


Route::get('/logs', function () {
    return view('features.presencesuccess');
})->name('presences-route');

Route::get('/report', function () {
    return view('features.reports');
})->name('report-route');

Route::get('/prform', function () {
    return view('features.presenceform');
})->name('prform-route');

Route::get('/plan', function () {
    return view('features.plan');
})->name('plan-route');

Route::get('/holi', function () {
    return view('features.holiday');
})->name('holiday-route');

Route::get('/shift', function () {
    return view('features.shift');
})->name('shift-route');

Route::get('/mess', function () {
    return view('messages.messages');
})->name('messages-route');

Route::get('/jobmess', function () {
    return view('messages.job-report');
})->name('jobmess-route');

Route::get('/contract', function () {
    return view('features.contract');
})->name('contract-route');

Route::get('/logsout', function () {
    return view('out.offpresence');
})->name('offpresence-route');



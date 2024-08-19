<?php

use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;

/**
 * Admin Routes\
 *
 * this route is protected by the auth middleware, and has the prefix of admin.
 * so whenever you want to access this route, you need to be authenticated and have the "admin" prefix in the URL.
 *
 * ex: http://localhost:8000/admin/dashboard
 */

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::prefix('profile')->name('profile.')->controller(ProfileController::class)->group(function () {
    Route::get('/', 'edit')->name('edit');
    Route::patch('/', 'update')->name('update');
    Route::delete('/', 'destroy')->name('destroy');
});

Route::withoutMiddleware('auth')->group(function () {
    require __DIR__.'/auth.php';
});

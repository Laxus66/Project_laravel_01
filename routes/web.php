<?php

use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('client.home.index');
})->name('home');
// ----------------------------------------------------------------
// admin routes
Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
})->name('dashboard');


Auth::routes();
Route::resource('role', RoleController::class);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

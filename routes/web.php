<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard/Index');
})->name('dashboard');

Route::get('/report', function () {
    return Inertia::render('Report/Index');
})->name('report');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

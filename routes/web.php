<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| TEMP DEMO ROUTES (UI ONLY)
|--------------------------------------------------------------------------
| No auth, no DB, no controllers
| Just to preview layouts & screens
*/

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

/* Vendors */
Route::get('/vendors', function () {
    return view('pages.vendors.index');
})->name('vendors.index');

Route::get('/vendors/create', function () {
    return view('pages.vendors.create');
})->name('vendors.create');

Route::get('/vendors/{id}', function () {
    return view('pages.vendors.show');
})->name('vendors.show');

/* Risk */
Route::get('/risk/assessment', function () {
    return view('pages.risk.assessment');
})->name('risk.assessment');

/* Auth (Mock) */
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.signup');
})->name('register');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AssessmentController;

Route::get('/', function () {
    return redirect()->route('login');
});
// Route::middleware(['auth'])->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/vendors', [VendorController::class, 'index'])->name('vendors.index');
    Route::get('/vendors/create', [VendorController::class, 'create']);
    Route::get('/vendors/{vendor}', [VendorController::class, 'show']);
    Route::get('/vendors/{vendor}/history', [VendorController::class, 'history']);

    Route::resource('/documents', DocumentController::class);

    Route::resource('assessments', AssessmentController::class);
    Route::get('/assessments/{assessments}/question', [AssessmentController::class, 'question']);
    Route::get('/assessments/{assessments}/results', [AssessmentController::class, 'results']);



    Route::get('/risk', [VendorController::class, 'index']);
// });
require __DIR__.'/auth.php';

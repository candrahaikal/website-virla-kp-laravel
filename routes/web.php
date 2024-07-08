<?php

use App\Http\Controllers\AwardController;
use App\Models\Award;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('home.index');


Route::get('/award', function () {
    $awards = Award::all();

    // Render view
    return view('pages.award.index', compact('awards'));
})->name('award.index');


Route::get('/why-choose-us', function () {
    return view('pages.why-choose-us');
})->name('why-choose-us');


Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/admin', function () {
    return view('pages.login');
})->name('login');

Route::post('/admin', function () {
    return view('pages.register');
})->name('register');

// CRUD Award
// Get all data awards
Route::get('admin/award', [AwardController::class, 'index'])->name('admin.index');

// Route create page awards
Route::get('/admin/award/create', [AwardController::class, 'create'])->name('admin.create');

// Store data awards
Route::post('/admin/award', [AwardController::class, 'store'])->name('admin.store');

// Route detail data award
Route::get('/admin/award/{id}', [AwardController::class, 'show'])->name('admin.show');

// Route edit data award
Route::get('/admin/award/edit/{id}', [AwardController::class, 'edit'])->name('admin.edit');

// Update data award
Route::put('/admin/award/edit/{id}', [AwardController::class, 'update'])->name('admin.update');

// Delete data award
Route::delete('/admin/award/{id}', [AwardController::class, 'destroy'])->name('admin.destroy');

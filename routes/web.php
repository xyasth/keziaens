<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

// Home page route
Route::get('/', [ProjectController::class, 'index']);

// Project detail route
Route::get('/collections/{slug}', [ProjectController::class, 'show'])->name('project.detail');

Route::get('/card', function () {
    return view('cardtest');
});

Route::get('/folder', function () {
    return view('folderview');
});

Route::get('/about', function () {
    return view('about');
});

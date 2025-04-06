<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/card', function () {
    return view('cardtest');
});

Route::get('/folder', function () {
    return view('folderview');
});

Route::get('/about', function () {
    return view('about');
});

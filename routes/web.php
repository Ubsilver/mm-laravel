<?php

use App\Http\Controllers\MainController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('home', [MainController::class, 'showIndex'])->name('home');

Route::get('array', [MainController::class, 'showArray'])->name('array');

Route::get('/reports', [MainController::class, 'index'])->name('reports.index');

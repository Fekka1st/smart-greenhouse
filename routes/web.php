<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreenhouseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [GreenhouseController::class, 'index'])->name('home');
Route::get('/monitor', [GreenhouseController::class, 'monitor'])->name('monitor');
Route::get('/control', [GreenhouseController::class, 'control'])->name('control');
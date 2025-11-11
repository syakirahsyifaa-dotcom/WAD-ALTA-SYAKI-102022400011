<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KucingController;

Route::get('/', [KucingController::class, 'index'])->name('kucings.index');
Route::get('/kucing/{id}', [KucingController::class, 'show'])->name('kucings.show');

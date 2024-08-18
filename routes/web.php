<?php

use App\Http\Controllers\CargarExcelController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [CargarExcelController::class, 'index']);
Route::post('/upload', [CargarExcelController::class, 'upload'])->name('upload');

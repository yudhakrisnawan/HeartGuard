<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeartDiseaseController;

// Route untuk menampilkan form
Route::get('/', [HeartDiseaseController::class, 'showForm'])->name('home');

// Route untuk memproses prediksi
Route::post('/predict', [HeartDiseaseController::class, 'predict'])->name('predict');

<?php
use App\Http\Controllers\JamaahUmrohController;
use App\Http\Controllers\KontakPesanController;

Route::apiResource('jamaah', JamaahUmrohController::class);
Route::apiResource('kontak', KontakPesanController::class);

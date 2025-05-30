<?php
use App\Http\Controllers\JamaahUmrohController;
use App\Http\Controllers\KontakPesanController;

Route::post('/jamaah', [JamaahUmrohController::class, 'store'])->name('jamaah.store');
Route::post('/kontak', [KontakPesanController::class, 'store'])->name('kontak.store');
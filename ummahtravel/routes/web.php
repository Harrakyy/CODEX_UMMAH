<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmrohBookingController;

Route::get('/', function () {
    return view('welcome');
});

// Route for About Us page
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});

// Route for Daftar Umroh page
Route::get('/daftar-umroh', function () {
    return view('daftar-umroh');
});

// Resource route for Umroh Bookings
Route::resource('umroh-saya', UmrohBookingController::class);

// Route for Contact Us page
Route::get('/hubungi-kami', function () {
    return view('hubungi-kami');
});

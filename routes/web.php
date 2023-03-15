<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\fiturController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { //halaman
    return view('welcome');//menampilkan seusa
});

// route fitur
Route::get('/dashboard/fitur', function () { 
    return view('fitur');
})->name('fitur');
// login
Route::get('/login', function () { 
    return view('login');
});
// menu pendaftaran
Route::get('/login/pendaftaran', function () { 
    return view('menupendaftaran');
});

// menu dashboard
// menu pendaftaran
Route::get('/dashboard', function () { 
    return view('dashboard');
});
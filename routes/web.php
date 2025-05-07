<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('dashboard', [
        'mahasiswa' => [
            'fauzi',
            'keith',
        ],
    ]);
})->name('home');

Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'processLogin'])->name('processLogin');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');

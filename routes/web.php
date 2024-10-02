<?php

use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/quiz', [QuizController::class, 'start'])
    ->middleware(['auth', 'verified'])
    ->name('quiz.start');

require __DIR__ . '/auth.php';

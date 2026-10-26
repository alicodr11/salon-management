<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', function () {
return redirect()->route('register');
});

Route::get('/hi', [HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/services', [ServiceController::class, 'index'])
    ->name('services.index');

Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');

Route::post('/contact', [ContactController::class, 'store']) 
    ->name('contact.store');

Route::get('/feedback', [FeedbackController::class, 'index'])
    ->name('feedback.index');

Route::post('/feedback', [FeedbackController::class, 'store'])
    ->name('feedback.store');  
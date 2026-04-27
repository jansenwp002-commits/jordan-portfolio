<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Serve the Vue SPA for all routes
Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');

// Contact form API route
Route::post('/api/contact', [ContactController::class, 'send']);

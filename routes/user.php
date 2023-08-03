<?php

use Illuminate\Support\Facades\Route;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified', 'user',
])->group(function () {
    Route::get('/user/dashboard', function () {
        return view('user.user_dashboard');
    })->name('user.dashboard');
});

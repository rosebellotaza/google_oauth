<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleLoginController;

Route::get('/', function () {
    return view('login'); // Always show login page on root
});

// Google login redirect
Route::get('auth/google', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.login');

// Google login callback
Route::get('auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);

// Google logout route (clear session)
Route::get('auth/google/logout', [GoogleLoginController::class, 'logout'])->name('google.logout');

// Logout route (clear session and redirect to login)
Route::get('/logout', function () {
    session()->forget('user'); // Clear the user session
    session()->flush(); // Flush all session data
    return redirect('/'); // Redirect to the login page
})->name('logout');

Route::get('/dashboard', function () {
    $user = session('user'); // Retrieve user data from the session
    return view('dashboard', ['user' => $user]); // Pass user data to the view
})->name('dashboard');


require __DIR__.'/auth.php';

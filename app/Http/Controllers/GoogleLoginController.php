<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            // Fetch Google user data
            $googleUser = Socialite::driver('google')->user();
            
            // Store user information in the session
            session(['user' => $googleUser]);

            // Redirect to dashboard or any other route
            return redirect('/dashboard');
        } catch (\Exception $e) {
            return redirect('/')->with('error', 'Unable to authenticate using Google.');
        }
    }
            public function logout()
        {
            // Clear the session
            session()->forget('user');
            session()->flush();

            // Redirect to the login page
            return redirect('/');
        }

}

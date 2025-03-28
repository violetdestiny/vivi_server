<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SocialController extends Controller
{
    // Redirect to Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')
            ->with(['prompt' => 'select_account']) // Force account selection
            ->redirect();
    }

    // Handle Google callback
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Find or create user
            $user = User::firstOrCreate(
                ['email' => $googleUser->email],
                [
                    'name' => $googleUser->name,
                    'password' => bcrypt(Str::random(24)),
                    'email_verified_at' => now()
                ]
            );

            Auth::login($user, true);

            return redirect()->intended('/blog');

        } catch (\Exception $e) {
            \Log::error('Google login failed: '.$e->getMessage());
            return redirect('/login')->withErrors('Login failed. Please try again.');
        }
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $user = User::where('email', $googleUser->getEmail())->first();

            if (!$user) {
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'password' => encrypt('randomencryptedpassword')
                ]);
            } else {
                $user->update([
                    'google_id' => $googleUser->getId()
                ]);
            }

            Auth::login($user);
            return redirect('/');

        } catch (\Exception $e) {
            \Log::error('Google Auth Error: '.$e->getMessage());
            return redirect('/login')->withErrors('Google login failed. Please try again.');
        }
    }
}

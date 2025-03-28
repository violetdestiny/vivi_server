<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/blog';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Google Login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Google Callback
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        // Find or create user
        $authUser = User::firstOrCreate(
            ['email' => $user->email],
            [
                'name' => $user->name,
                'password' => bcrypt(Str::random(24))
            ]
        );

        Auth::login($authUser, true);

        return redirect()->intended($this->redirectTo);
    }

    // Preserve intended URL for all login methods
    public function showLoginForm()
    {
        if (!session()->has('url.intended')) {
            session(['url.intended' => url()->previous()]);
        }

        return view('auth.login');
    }
}

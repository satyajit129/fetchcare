<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        // Get user info from Google
        $googleUser = Socialite::driver('google')->stateless()->user();

        // Create or update user record
        $user = User::updateOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'name'      => $googleUser->getName(),
                'google_id' => $googleUser->getId(),
                'password'  => bcrypt('123456'),
            ]
        );

        // Login the user
        Auth::login($user);

        // Regenerate session for security
        session()->regenerate();

        // Redirect with success
        return redirect()->route('operationalManagement')->with('success', 'Welcome back!');
    }
}

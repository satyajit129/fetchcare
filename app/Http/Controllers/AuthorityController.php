<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Throwable;

class AuthorityController extends Controller
{
    public function signup(): View
    {
        // dd('here');
        return view('pages.sign_up');
    }
    public function register(Request $request): RedirectResponse
    {
        try {
            $request->validate([
                'clinic_name' => 'required|string',
                'email'       => 'required|email|unique:users,email',
                'password'    => 'required|min:6|confirmed',
                'terms'       => 'accepted',
            ]);

            $user = User::create([
                'name'     => $request->clinic_name,
                'email'    => $request->email,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);

            return redirect()->route('operationalManagement')->with('success', '🎉 Account created successfully! Welcome to FetchCare.');
        } catch (Throwable $th) {
            // Log error (optional)
            Log::error('Registration failed: ' . $th->getMessage());

            return redirect()->back()->with('error', $th->getMessage())->withInput();
        }
    }

    public function login(): View
    {
        return view('pages.login');
    }
    public function loginRequest(Request $request)
    {
        // dd($request->all());
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials, $request->filled('remember'))) {
                $request->session()->regenerate();
                return redirect()->route('operationalManagement')->with('success', 'Welcome back!');
            }
            
        } catch (Throwable $th) {
            Log::error('Login error: ' . $th->getMessage(), [
                'trace' => $th->getTraceAsString(),
            ]);
            return back()->with('error', $th->getMessage())->withInput();
        }
    }
    public function operationalManagement(): View
    {
        return view('pages.operational_management');
    }
    public function financeManagement(): View
    {
        return view('pages.financial_management');
    }
    public function clientManagement(): View
    {
        return view('pages.client_management');
    }
    public function scheduleManagement(): View
    {
        return view('pages.schedule_management');
    }
    public function marketingManagement(): View
    {
        return view('pages.marketing_management');
    }
    public function fetchAI(): View
    {
        return view('pages.fetch_ai');
    }
    public function settings(Request $request): View
    {
        $form_type = $request->query('form', 'profile'); // default to 'profile'
        return view('pages.settings', compact('form_type'));
    }
}

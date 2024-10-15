<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login request
    public function login(Request $request)
    {
        $credentials = $request->only('s_number', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('success', 'Logged in successfully.');
        }

        return back()->withErrors([
            's_number' => 'The provided credentials do not match our records.',
        ]);
    }

    // Show registration form
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Handle registration request
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            's_number' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            's_number' => $request->s_number,
            'user_type' => 'student',
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('login')->with('success', 'Account created successfully.');
    }

    // Handle logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('landing')->with('success', 'Logged out successfully.');
    }
}

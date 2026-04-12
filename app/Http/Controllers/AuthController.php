<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Tampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }
    
    // Proses login (hanya menggunakan username)
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        
        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->onlyInput('username');
    }
    
    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
    
    // Tampilkan form register
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    
    // Proses register
    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'gender' => 'required|in:male,female',
            'birth_date' => 'required|date',
            'phone' => 'required|string|max:15',
            'faculty' => 'required|string|max:255',
            'address' => 'required|string',
        ]);
        
        $user = User::create([
            'username' => $validated['username'],
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'user_type' => 'user',
            'gender' => $validated['gender'],
            'birth_date' => $validated['birth_date'],
            'phone' => $validated['phone'],
            'faculty' => $validated['faculty'],
            'address' => $validated['address'],
            'study_program' => $request->study_program,
            'position' => $request->position,
        ]);
        
        Auth::login($user);
        
        return redirect('/dashboard');
    }
}
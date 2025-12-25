<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {
    public function showLogin() {
        if (auth()->check()) {
            if (auth()->user()->role === 'admin') {
                return redirect()->route('dashboard.admin');
            }
            
            if (auth()->user()->role === 'user') {
                return redirect()->route('dashboard.user');
            }
        }
        return view('login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($credentials)) {

            if (auth()->user()->role === 'admin') {
                return redirect()->route('dashboard.admin');
            }

            if (auth()->user()->role === 'user') {
                return redirect()->route('dashboard.user');
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('view.home');
    }

}

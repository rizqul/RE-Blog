<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("login.index", [
            'title' => 'Login Page',
            'active' => 'login'
        ]);
    }

    public function authentication(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => ['required', 'min:5', 'max:255']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/posts');
        }

        return back()->with('loginError', 'Login failed !!!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

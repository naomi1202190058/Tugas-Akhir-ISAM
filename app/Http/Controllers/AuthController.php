<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view("login");
    }

    public function authenticate(Request $request) {
        $credentials = [
            "username" => $request->username,
            "password" => $request->password
        ];
        
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
    }

    public function resetPassword() {
        return view("reset-password");
    }

    public function postResetPassword() {
        return redirect("/reset-password")->with("success", "Email reset password telah dikirim, cek email mu sekarang");
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}

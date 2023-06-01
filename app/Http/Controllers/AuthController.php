<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginUKM() {
        return view("ukm.login");
    }

    public function loginDitmawa() {
        return view("ditmawa.login");
    }

    public function authenticateUkm(Request $request) {
        $credentials = [
            "username" => $request->username,
            "password" => $request->password
        ];

        if(Auth::guard("ukm")->attempt($credentials)) {
            $request->session()->put("role", "ukm");
            $request->session()->regenerate();
            
            return redirect()->intended('/');
        }
    }

    public function authenticateDitmawa(Request $request) {
        $credentials = [
            "sso_id" => $request->sso_id,
            "password" => $request->password
        ];

        if(Auth::guard("ditmawa")->attempt($credentials)) {
            $request->session()->put("role", "ditmawa");
            $request->session()->regenerate();
            
            return redirect()->intended('/');
        }
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login/ukm');
    }
}

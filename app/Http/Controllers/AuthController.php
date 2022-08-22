<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class AuthController extends Controller
{
    public function login(){
       
        return view('auth.login');

    }

    public function authentication(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->role_id == 1) {
                return redirect()->intended('/superadmin');
            } else if($user-> role_id == 2) {
                return redirect()->intended('/admin');
            } else if($user -> role_id == 3) {
                return redirect()->intended('/pemilik');
            } else if($user -> role_id == 4) {
                return redirect() -> intended ('/supervisor');
            } else if ($user -> role_id == 5) {
                return redirect() -> intended ('/kasir');
            } 
            return redirect()->intended('/');
        };

        return back()->withErrors(['error' => 'Username atau password salah'])->onlyInput('email');
    }

    public function logout (Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/login');
    }
}

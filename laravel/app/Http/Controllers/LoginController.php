<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    
    public function index(){
        return view('gawe.login',[
            'title'=>'Login'
        ]);
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $user = Auth::user();
            $request->session()->regenerate();
            $request->session()->flash('success', 'Registrasi berhasil silahkan login ke akun anda');
            return redirect()->intended('/gawe');
        }
        
        return back()->with('loginerror', 'login failed');
    }

    public function logout(Request $request){
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/gawe');
    }
}

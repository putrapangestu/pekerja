<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function getLogin()
  {
    return view('auth.login');
  }

  public function postLogin(Request $request)
  {

      // Validate the form data
      $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required','min:8'],
      ]);

      // Attempt to log the user in
      // Passwordnya pake bcrypt
      
      if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password],$request->get('remember'))) {
        if (Auth::attempt($credentials)) {
          $request->session()->regenerate();
          return redirect()->intended('/');
        }else{
          return back();
        }
      } else {
        return back()->with('login_gagal', 'Email atau password salah, silahkan login ulang');
      }

  }

  public function logout(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
  }

  public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
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
        'password' => ['required'],
      ]);

      // Attempt to log the user in
      // Passwordnya pake bcrypt
    if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
      // if (Auth::attempt($credentials)) {
      //   $request->session()->regenerate();
        return redirect()->intended('/dashboard');
      // }
      // return back()->withErrors([
      //   'email' => 'The provided credentials do not match our records.',
      // ]);
    } else if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
      if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/');
      }
      return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
      ]);
    }

  }

  public function logout(Request $request)
  {
    // if (Auth::guard('admin')->check()) {
    //   Auth::guard('admin')->logout();
    // } elseif (Auth::guard('user')->check()) {
    //   Auth::guard('user')->logout();
    // }

    // return redirect('/');

    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
  }
}
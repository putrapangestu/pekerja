<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{

  public function adminLogin()
  {
    return view('admin.admin');
  }

  public function AdminPostLogin(Request $request){
     // Validate the form data
      $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required','min:8'],
      ]);

      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password],$request->get('remember'))) {
        return redirect()->intended('/dashboard');
      }else {
        return back()->with('login_gagal', 'Email atau password salah, silahkan login ulang');
      }

  }

  public function logout(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/admin');
  }

  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }
}
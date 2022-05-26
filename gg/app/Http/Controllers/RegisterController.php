<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\TagKategori;
use App\Models\Profile;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required','string'],
            'user' => ['required'],
            'email' => ['required', 'email','unique:users'],
            'password' => ['required','min:8','string'],
          ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'user' => $request->user,
            'email' => $request->user,
            'password' => Hash::make($request->password),
            // 'foto' => $request->
            'created_at' => date("Y-m-d H:i:s", strtotime('now'))
        ]);

        if(!($request->name == null && $request->user == null && $request->email == null && $request->password == null )){
            return redirect('/login')->with('regis','Registrasi Berhasil, Silahkan Masuk ke Akun Anda');
        }else {
           return back()->with('gagal_regis','Registrasi Gagal, Silahkan Isi Ulang Formulir'); 
        }
    }

}
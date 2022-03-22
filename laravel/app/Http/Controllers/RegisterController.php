<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Register;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        $model = new Register;

        return view('gawe.signup', compact(
            'model'
        ));
    }

    public function store(Request $request){

        $model = new Register;
        // $model->nama = $request->nama;
        // $model->user = $request->user;
        // $model->email = $request->email;
        // $model->password = $request->password;

        // $model->save();

        $validateData = $request->validate([
            'nama' => ['required','max:255'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'user' => ['required'],
            'password' => ['required', 'min:8', 'max:255']
        ]);

        $validateData['password'] = Hash::make($validateData['password']);
        Register::create($validateData);
        // $request->session()->flash('success', 'Registrasi berhasil silahkan login ke akun anda');
        return redirect('gawe/login')->with('success', 'Registrasi berhasil silahkan login ke akun anda');
    }
}

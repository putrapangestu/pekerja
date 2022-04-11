<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProsesRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\support\facades\Auth;
use App\Models\Rekrut;



class RekrutController extends Controller
{
    public function index($email){

        $pp = DB::table('profiles')->where('email', $email)->get();

        
        return view('gawe.rekrut1',['profiles' => $pp], ['title'=> 'rekrut']);
    }

    public function store(Request $request,$email)
    {
        // $model = new Rekrut();
        // $model->nama = $request->nama;
        // $model->alamat = $request->alamat;
        // $model->provinsi = $request->provinsi;
        // $model->kota = $request->kota;
        // $model->no = $request->no;
        // $model->telpon = $request->telpon;
        // $model->email = $request->email;
        // $model->kata = $request->kata;
        // $model->save();

        $validateData= $request->validate([
            'dari'=>'nullable',
            'untuk'=>'nullable',
            'nama'=>'nullable',
            'alamat'=>'nullable',
            'provinsi'=>'nullable',
            'kota'=>'nullable',
            'no'=>'nullable',
            'telepon'=>'nullable',
            'email'=>'nullable',
            'kata'=>'nullable',
            'posisi'=>'nullable',
            'jam'=>'nullable',
            'gaji'=>'nullable',
            'informasi'=>'nullable',

        ]);;

        DB::table('rekrut0')->insert([
            'dari'=>Auth::user()->email,
            'untuk'=>$email,
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'provinsi'=>$request->provinsi,
            'kota'=>$request->kota,
            'no'=>$request->no,
            'telepon'=>$request->telepon,
            'email'=>$request->email,
            'kata'=>$request->kata,
            'posisi'=>$request->posisi,
            'jam'=>$request->jam,
            'gaji'=>$request->gaji,
            'informasi'=>$request->informasi,

        ]);

        
       
        
        return redirect('listings');
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProsesRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Rekrut;



class RekrutController extends Controller
{
    public function index(){
        return view('gawe.rekrut',[
            'title'=> 'rekrut'
        ]);
    }

    public function store(Request $request)
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

        // $validateData = $request->validate([
        //     'nama'=>['required'],
        //     'alamat'=>['required'],
        //     'provinsi'=>['required'],
        //     'kota'=>['required'],
        //     'no'=>['required'],
        //     'telpon'=>['required'],
        //     'email'=>['required']
        //     'kata'=>['required']
        //     'posisi'=>['required']
        //     'jam'=>['required']
        //     'gaji'=>['required']
        //     'informasi'=>['required']
        // ]);

        DB::table('rekrut')->insert([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'provinsi'=>$request->provinsi,
            'kota'=>$request->kota,
            'no'=>$request->no,
            'telpon'=>$request->telpon,
            'email'=>$request->email,
            'kata'=>$request->kata,
            'posisi'=>$request->posisi,
            'jam'=>$request->jam,
            'gaji'=>$request->gaji,
            'informasi'=>$request->informasi,

        ]);
        
        return redirect('gawe/rekrut');
    }
    
}

<?php

namespace App\Http\Controllers;
use App\Models\register;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\File;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
    public function index($email){
        $errors = Profile::all();
        $data = User::all();

        $data = DB::table('users')->where('email',$email)->get();
        return view('gawe.profile',['users' => $data]);

        return view('gawe.profile', compact(
            'datas', 'errors'
        ));
    }

    public function edit(){

        return view('gawe.edit-profile');
    }

    public function general(Request $request){

        $model = new Profile;
        
        $model->nama = $request->nama;
        $model->email = $request->email;
        $model->pekerja = $request->pekerja;
        $model->ultah = $request->ultah;
        $model->telepon = $request->telepon;
        $model->alamat = $request->alamat;
        $model->bidang = $request->bidang;
        $model->keterangan = $request->keterangan;
        $model->twitter = $request->twitter;
        $model->facebook = $request->facebook;
        $model->google = $request->google;
        $model->link = $request->pekerja;
        $model->instagram = $request->instagram;
        $model->lulusansd = $request->lulusansd;
        $model->sd = $request->sd;
        $model->lulusansmp = $request->lulusansmp;
        $model->smp = $request->smp;
        $model->lulusansma = $request->lulusansma;
        $model->sma = $request->sma;
        $model->bio = $request->bio;
        $model->prestasi = $request->prestasi;
        $model->pengalaman = $request->pengalaman;
        $model->kemampuan = $request->kemampuan;
        
        if($request->file('foto')){
            $file = $request->file('foto');
            $nama_file = time().str_replace(" ","", $file->getClientOriginalName());
            $file->move('gambar', $nama_file);

            File::delete("gambar", $model->foto);
            $model -> foto = $nama_file;
        }
        if($request->file('hasil')){
            $file = $request->file('hasil');
            $nama_file = time().str_replace(" ","", $file->getClientOriginalName());
            $file->move('gambar', $nama_file);

            File::delete("gambar", $model->hasil);
            $model -> hasil = $nama_file;
        }
        $model->save();

        return redirect('gawe/profile');
    }

    public function perusahaan(){
        return view('gawe/profile1');
    }

}

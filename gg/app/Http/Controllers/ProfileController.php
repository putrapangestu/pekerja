<?php

namespace App\Http\Controllers;
use App\Models\register;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\TagKategori;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user()->email;
        $errors = Profile::all();
        $data = User::all();

        $profile = DB::table('profiles')->where('email',$user)->get();
        

        return view('gawe.profile', compact('errors'), ['data'=>$profile]);
    }

    public function edit($email){
        $errors = Profile::all();
        
        $profiles = DB::table('profiles')->where('email',$email)->get();

        return view('gawe.edit-profile', compact('errors'), ['profiles'=>$profiles]);
    }

    public function update(Request $request, $email){

        $tag = new TagKategori;
        $tag->tag = $request->tag;
        $tag->kategori = $request->kategori;
        $tag->save();

        $db = DB::table('profiles')->where('email',$email);
        $db->update([
            'name' => $request->name,
            'email' => $request->email,
            'pekerja' => $request->pekerja,
            'ultah' => $request->ultah,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'bidang' => $request->bidang,
            'keterangan' => $request->keterangan,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'google' => $request->google,
            'link' => $request->link,
            'instagram' => $request->instagram,
            'lulusansd' => $request->lulusansd,
            'sd' => $request->sd,
            'lulusansmp' => $request->lulusansmp,
            'smp' => $request->smp,
            'lulusansma' => $request->lulusansma,
            'sma' => $request->sma,
            'bio' => $request->bio,
            'prestasi' => $request->prestasi,
            'pengalaman' => $request->pengalaman,
            'kemampuan' => $request->kemampuan
        ]);
       
        $model =  Profile::where('email',$email)->first();
        // $model->name = $request->name;
        // $model->email = $request->email;
        // $model->pekerja = $request->pekerja;
        // $model->ultah = $request->ultah;
        // $model->telepon = $request->telepon;
        // $model->alamat = $request->alamat;
        // $model->bidang = $request->bidang;
        // $model->keterangan = $request->keterangan;
        // $model->twitter = $request->twitter;
        // $model->facebook = $request->facebook;
        // $model->google = $request->google;
        // $model->link = $request->link;
        // $model->instagram = $request->instagram;
        // $model->lulusansd = $request->lulusansd;
        // $model->sd = $request->sd;
        // $model->lulusansmp = $request->lulusansmp;
        // $model->smp = $request->smp;
        // $model->lulusansma = $request->lulusansma;
        // $model->sma = $request->sma;
        // $model->bio = $request->bio;
        // $model->prestasi = $request->prestasi;
        // $model->pengalaman = $request->pengalaman;
        // $model->kemampuan = $request->kemampuan;
        
        // dd($model->telepon);
        
        if($request->file('foto')){
            $file = $request->file('foto');
            $nama_file = time().str_replace(" ","", $file->getClientOriginalName());
            $file->move('gambar', $nama_file);

            File::delete("gambar", $model->foto);
            $model -> foto = $nama_file;
            $model->save();
        }
        if($request->file('hasil')){
            $file = $request->file('hasil');
            $nama_file = time().str_replace(" ","", $file->getClientOriginalName());
            $file->move('gambar', $nama_file);

            File::delete("gambar", $model->hasil);
            $model -> hasil = $nama_file;
            $model->save();
        }
        // $model->save();

        $user = User::where('email',$email)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        // if (!(Hash::check($request->get('current-password'), $user->password))) {
        //     // The passwords matches
        //     return redirect()->back()->with("error","Your current password does not matches with the password.");
        // }

        // if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
        //     // Current password and new password same
        //     return redirect()->back()->with("error","New Password cannot be same as your current password.");
        // }

        // $validatedData = $request->validate([
        //     'current-password' => 'required',
        //     'new-password' => 'required|string|min:8|confirmed',
        // ]);

        // //Change Password
        // $user->password = bcrypt($request->get('new-password'));
        $user->save();


        return redirect('profile');
    }

    public function perusahaan(){
        return view('profile1');
    }

}

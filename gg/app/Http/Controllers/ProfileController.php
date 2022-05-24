<?php

namespace App\Http\Controllers;
use App\Models\register;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\TagKategori;
use App\Models\User;
use App\Rules\CurrentPassword;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user()->email;
        $errors = User::all();
        $data = User::all();


        $profile = DB::table('users')->where('email',$user)->get();
        

        return view('gawe.profile', compact('errors'), ['data'=>$profile]);
    }

    public function edit($email){
        $errors = User::all();
        
        $profiles = DB::table('users')->where('email',$email)->get();

        return view('gawe.edit-profile', compact('errors'), ['profiles'=>$profiles]);
    }

    public function update(Request $request, $email){

        $tag = new TagKategori;
        $tag->tag = $request->tag;
        $tag->kategori = $request->kategori;
        $tag->save();

        $db = DB::table('users')->where('email',$email);
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
            'kemampuan' => $request->kemampuan,   
        ]);
       
        $model =  User::where('email',$email)->first();
 
        if($request->file('foto')){
            $file = $request->file('foto');
            $nama_file = time().str_replace(" ","", $file->getClientOriginalName());
            $file->move('gambar', $nama_file);

            if(isset($model->foto)){
            File::delete(public_path()."/gambar/", $model->foto);
            }
            $db->update(['foto' => $nama_file]);
            
        }
        if($request->file('hasil')){
            $file = $request->file('hasil');
            $nama_file = time().str_replace(" ","", $file->getClientOriginalName());
            $file->move('gambar', $nama_file);

            if(isset($model->foto)){
                File::delete(public_path()."/gambar/", $model->hasil);
            }
            $db->update(['hasil' => $nama_file]);
                        
        }

        if(Hash::check($request->get('oldpassword'),Auth::user()->password)){
            $user = User::where('email',$email)->first();
            $user->password = Hash::make($request->get('password'));
            $user->save();
        }else{
             return back()->with('gagal_password','Password gagal diganti');
        }

        return redirect('profile');
    }

    public function edit_password($email){
       return view('gawe.signup');
    }

    public function update_password(Request $request, $email){
        $validateData = $request->validate([
            'password' => 'string|min:8|confirmed',
        ]);

        $current_password = Auth::user()->password;
        if(Hash::check($request->get('oldpassword'),$current_password)){
            $user = User::where('email',$email)->first();
            $user->password = Hash::make($request->get('password'));
            $user->save();

            return redirect('profile');
        }else{
             return back()->with('gagal_password','Password gagal diganti');
        }
            
    }
    

}

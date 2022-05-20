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

    $request->validate([
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],

        'current_password'=> ['required', new CurrentPassword],
        'new_password' => ['required'],
        'new_confirm_password' =>['same:new_password']
        ]);

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
            'password' => Hash::make($request->get('password'))           
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

        User::find(auth()->user()->email)->update([   
            'password' => Hash::make($request['new_password']),
        ]);

        // $user = User::where('email',$email)->first();
        // // $user->name = $request->name;
        // // $user->email = $request->email;
        // // if (!(Hash::check($request->get('current-password'), $user->password))) {
        // //     // The passwords matches
        // //     return redirect()->back()->with("error","Your current password does not matches with the password.");
        // // }

        // // if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
        // //     // Current password and new password same
        // //     return redirect()->back()->with("error","New Password cannot be same as your current password.");
        // // }

        // // $validatedData = $request->validate([
        // //     'current-password' => 'required',
        // //     'new-password' => 'required|string|min:8|confirmed',
        // // ]);

        // // //Change Password
        // // $user->password = bcrypt($request->get('new-password'));
        // $user->save();


        return redirect('profile');
    }

    public function perusahaan(){
        return view('profile1');
    }

}

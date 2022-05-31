<?php

namespace App\Http\Controllers;

use App\Models\penggunamodel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->penggunamodel = new penggunamodel();
    }
    
    public function user(){
        $data = [
            'pengguna' => $this->penggunamodel->allData(),
        ];
        return view('admin.user', $data);
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function blog(){
        return view('admin.blog');
    }
    public function create(){
        return view('admin.create-blog');
    }

    public function delete($id)
    {
        $anu = User::where('id',$id)->first();
        //hapus atau delete foto
        // $user= Auth::user()->email
        
        // if ($user->foto <> "") {
        //     unlink(public_path('gambar').'/'.$user->foto);
        // }
        if($anu->blokir == 0){
            User::where('id',$id)->update([
                'blokir' => 1
            ]);
        }elseif($anu->blokir == 1){
            User::where('id',$id)->update([
                'blokir' => 0
            ]);
        }
        return redirect()->route('user')->with('pesan', 'Data Berhasil Di Hapus');
    }
    public function inbox_index(){
        return view('admin.email-inbox');
    }
}

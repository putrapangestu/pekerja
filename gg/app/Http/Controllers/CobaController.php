<?php

namespace App\Http\Controllers;

use App\Models\Rekrut;
use App\Models\Pilihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CobaController extends Controller
{
    Public function index(Request $request){
        $user = Auth::user()->email;
        $mail = Rekrut::all();

        $keyword = $request->keyword;

        
        $email = Rekrut::where('untuk',$user)
            ->orwhere('dari',$user)
            // ->where('nama', 'LIKE', '%'.$keyword.'%')
            // ->orwhere('dari', 'LIKE', '%'.$keyword.'%')
            // ->orwhere('untuk', 'LIKE', '%'.$keyword.'%')
            // ->orwhere('alamat', 'LIKE', '%'.$keyword.'%')
            // ->orwhere('provinsi', 'LIKE', '%'.$keyword.'%')
            // ->orwhere('kota', 'LIKE', '%'.$keyword.'%')
            // ->orwhere('no', 'LIKE', '%'.$keyword.'%')
            // ->orwhere('telepon', 'LIKE', '%'.$keyword.'%')
            // ->orwhere('email', 'LIKE', '%'.$keyword.'%')
            // ->orwhere('kata', 'LIKE', '%'.$keyword.'%')
            // ->orwhere('posisi', 'LIKE', '%'.$keyword.'%')
            // ->orwhere('jam', 'LIKE', '%'.$keyword.'%')
            // ->orwhere('gaji', 'LIKE', '%'.$keyword.'%')
            // ->orwhere('informasi', 'LIKE', '%'.$keyword.'%')
            // ->orwhere('balasan', 'LIKE', '%'.$keyword.'%')
            ->get();

        $email = DB::table('rekrut0')->where('untuk',$user)->orwhere ('dari',$user)->get();
   

        return view('gawe.inbox', ['tes' => $email], compact(
            'email'));
    }

    public function detail_index($id){
        $user = Auth::user()->email;

        $detail = DB::table('rekrut0')->where('id', $id)->get();
        
        foreach($detail as $d){
            $pp = DB::table('profiles')->where('email',$d->untuk)->get();

            return view('gawe.inbox-detail', ['rekrut' => $detail],['profiles' => $pp]);
        }

        

       
    }
    public function balasan(Request $request, $id){
        
        if($request->hapus == 'hapus'){
            DB::table('rekrut0')->where('id', $id)->delete();
            return redirect('inbox');

        }else{
            DB::table('rekrut0')->where('id', $id)->update([
                'balasan'=> $request->balasan,
            ]);
            return redirect('inbox/'.$id);
        }
        

    }
    

}

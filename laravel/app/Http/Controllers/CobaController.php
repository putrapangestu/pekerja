<?php

namespace App\Http\Controllers;

use App\Models\Rekrut;
use App\Models\Pilihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CobaController extends Controller
{
    Public function index(Request $request){
        $mail = Rekrut::all();
        $pilihan = Pilihan::all();

        return view('gawe.inbox', compact(
            'mail'
        ));
    }

    public function detail_index($email){

        $detail = DB::table('rekrut')->where('email', $email)->get();
        $pp = DB::table('profiles')->where('email', $email)->get();

        

        return view('gawe.inbox-detail', ['rekrut' => $detail],['profiles' => $pp]);
    }

    public function pilihan(Request $request){
        
            if(pilihan==terima){
            'pilihan'->'Saya menerima';
            }elseif(pilihan==tolak){
            'pilihan'->'Saya menolak';
            }
    
    }
}

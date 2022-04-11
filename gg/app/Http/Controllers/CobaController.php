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

        $email = DB::table('rekrut0')->where('untuk',$user)->orwhere ('dari',$user)->get();
   

        return view('gawe.inbox', ['email' => $email]);
    }

    public function detail_index($email){
        $user = Auth::user()->email;

        $detail = DB::table('rekrut0')->where('email', $email)->where('untuk',$user)->get();
        $pp = DB::table('profiles')->where('email', $email)->get();

        

        return view('gawe.inbox-detail', ['rekrut' => $detail],['profiles' => $pp]);
    }

}

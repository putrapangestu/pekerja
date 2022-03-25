<?php

namespace App\Http\Controllers;

use App\Models\Rekrut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CobaController extends Controller
{
    Public function index(Request $request){
        $mail = Rekrut::all();

        return view('gawe.inbox', compact(
            'mail'
        ));
    }

    public function detail_index($email){

        $detail = DB::table('rekrut')->where('email', $email)->get();
        $pp = DB::table('profiles')->where('email', $email)->get();

        return view('gawe.inbox-detail', ['rekrut' => $detail],['profiles' => $pp]);
    }
}

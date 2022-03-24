<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rekrut;

class IniController extends Controller
{
    Public function index(Request $request){
          
        return view('gawe.mail');
    }

    public function detail_index(Request $request){
        $mail = Rekrut::all();

        return view('gawe.mail-detail', compact(
            'mail'
        ));
    }
}

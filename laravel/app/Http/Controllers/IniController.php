<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IniController extends Controller
{
    Public function index(Request $request){
        return view('gawe.mail');
    }
    public function detail_index(Request $request){
        return view('gawe.mail-detail');
    }
}

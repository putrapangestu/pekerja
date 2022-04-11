<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;

class GaweController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
        $data = User::all();
        
        $keyword = $request->keyword;

        $datas = Profile::where('nama', 'LIKE', '%'.$keyword.'%')
        ->orwhere('pekerja', 'LIKE', '%'.$keyword.'%')
        ->orwhere('alamat', 'LIKE', '%'.$keyword.'%')
        ->orwhere('bidang', 'LIKE', '%'.$keyword.'%')
        ->orwhere('keterangan', 'LIKE', '%'.$keyword.'%')
        ->get();
        return view('index', compact('user', 'data', 'keyword', 'datas'));
    }

    public function about(){
        return view('gawe.about');
    }
}

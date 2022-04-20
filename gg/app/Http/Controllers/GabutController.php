<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use app\Models\User;
use Illuminate\Support\Facades\DB;

class GabutController extends Controller
{
    //listing
    public function listings(Request $request){
        // $errors = Profile::all();
        $keyword = $request->keyword;

        // $datas = Proses::all();
        $errors = Profile::where('name', 'LIKE', '%'.$keyword.'%')
            ->orwhere('bidang', 'LIKE', '%'.$keyword.'%')
            ->orwhere('alamat', 'LIKE', '%'.$keyword.'%')
            ->orwhere('pekerja', 'LIKE', '%'.$keyword.'%')
            ->get();

        return view('gawe.listings', compact(
            'errors'
        ));
    }

    public function listingsdetails($telepon){

        $data = DB::table('profiles')->where('telepon',$telepon)->get();
        return view('gawe.listings-details',['profiles' => $data]);




        // $errors = Profile::all();

        // return view('gawe.listings-details', compact(
        //     'errors'
        // ));
    }
    // public function index(Request $request){
    //     $user = Auth::user();
    //     $data = User::all();

    //     $datas = Profile::where('nama','LIKE','%'.$keyword.'%')
    //     ->orwhere('pekerja', 'LIKE', '%'.$keyword.'%')
    //     ->orwhere('')

    // }
}

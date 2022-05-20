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
        // $errors = User::all();
        $keyword = $request->keyword;
        $urutan = $request->urutan;
        if($urutan == 'terlama'){
            $urut = 'asc';
        }else{
            $urut = 'desc';
        }
        // $datas = Proses::all();
   
    

            $errors = DB::table('users')->where('user','pekerja')
                ->where('name', 'LIKE', '%'.$keyword.'%')
                ->orwhere('bidang', 'LIKE', '%'.$keyword.'%')
                ->orwhere('alamat', 'LIKE', '%'.$keyword.'%')
                ->orwhere('pekerja', 'LIKE', '%'.$keyword.'%')
                ->orderBy('created_at',$urut)
                ->get();
                
            
            return view('gawe.listings', compact('errors'));
        

    }

    public function listingsdetails($email){

        $data = DB::table('users')->where('email',$email)->get();
        return view('gawe.listings-details',['profiles' => $data]);




        // $errors = User::all();

        // return view('gawe.listings-details', compact(
        //     'errors'
        // ));
    }
    // public function index(Request $request){
    //     $user = Auth::user();
    //     $data = User::all();

    //     $datas = User::where('nama','LIKE','%'.$keyword.'%')
    //     ->orwhere('pekerja', 'LIKE', '%'.$keyword.'%')
    //     ->orwhere('')

    // }
}

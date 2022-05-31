<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Rekrut;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use app\Models\User;
use App\Models\Wishlist;
use Illuminate\Support\Facades\DB;

class GabutController extends Controller
{
    //listing
    public function listings(Request $request){
        // $errors = User::all();
        if(Auth::user()){
            $user = Auth::user()->email;
            $wish = DB::table('wishlists')->where('dari',$user)->get();    
        }else{
            $wish=0;
        }
        $keyword = $request->keyword;
        $urutan = $request->urutan;
        $kategori = $request->kategori;
        if($urutan == 'terlama'){
            $diurut = 'created_at';
            $urut = 'asc';
        }elseif($urutan == 'populer'){
            $penggunas = DB::table('users')->where('user','pekerja')->get();
            foreach ($penggunas as $pengguna ){
            $populer = Rekrut::where('untuk',$pengguna->email)->count();
            DB::table('users')->where('email',$pengguna->email)->update([
                'populer' => $populer
            ]);
            }
            $diurut = 'populer';
            $urut = 'asc';
        }else{
            $diurut = 'created_at';
            $urut = 'desc';
        }
        // $datas = Proses::all();
       
    

        $errors = DB::table('users')->where('user','pekerja')
        ->where(function($query) use ($keyword,$kategori){
            $query->where('name', 'LIKE', '%'.$keyword.'%')
        ->orwhere('bidang', 'LIKE', '%'.$keyword.'%')
        ->orwhere('alamat', 'LIKE', '%'.$keyword.'%')
        ->orwhere('pekerja', 'LIKE', '%'.$keyword.'%')
        ;
        })
        ->where('bidang','Like', '%'.$kategori.'%')
        ->orderBy('created_at',$urut)
        ->paginate(2);
            
            return view('gawe.listings', compact('errors','wish'));
        

    }

    public function listingsdetails($email){

        if(Auth::user()){
            $user = Auth::user()->email;
            $wish = DB::table('wishlists')->where('dari',$user)->first();    
        }else{
            $wish=0;
        }
        $data = DB::table('users')->where('email',$email)->where('user','Pekerja')->get();
        $dataes = DB::table('users')->where('email',$email)->where('user','Pekerja')->first();
        if(!($dataes)){
            return redirect('listings');
        }
        return view('gawe.listings-details',['profiles' => $data])->with(compact('wish'));




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

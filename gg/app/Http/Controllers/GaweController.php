<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;
use App\Models\Rekrut;
use Illuminate\Support\Facades\DB;

class GaweController extends Controller
{
    public function index(Request $request){
        $anu = Auth::user();
        if(isset($anu)){
        $user = Auth::user()->email;
        $data = User::all();

        $cek = DB::table('rekrut0')->where('untuk',$user)->orwhere('dari',$user)->first();
        $keyword = $request->keyword;
        $datas = Profile::where('name', 'LIKE', '%'.$keyword.'%')
            ->orwhere('pekerja', 'LIKE', '%'.$keyword.'%')
            ->orwhere('alamat', 'LIKE', '%'.$keyword.'%')
            ->orwhere('bidang', 'LIKE', '%'.$keyword.'%')
            ->orwhere('keterangan', 'LIKE', '%'.$keyword.'%')
            ->get();
        if (isset($cek)){
            if ($cek->dari == $user){
                $notifs = Rekrut::where('dari', $user)
                ->where('balasan',!null)
                ->where('notif_dari',0)
                ->get();
            }elseif ($cek->untuk == $user){
                $notifs = Rekrut::where('untuk', $user)
                ->where('seen_untuk',0)
                ->where('notif_untuk',0)
                ->get();
            }
            
            return view('index', compact('user', 'data', 'keyword', 'datas', 'notifs', 'cek'));
        }
        

      
        
        
        
        return view('index', compact('user', 'data', 'keyword', 'datas', 'cek'));
        }else{
            return view('index');
        }
        
       
    }

    public function about(){
        return view('gawe.about');
    }

    public function notif(Request $request)
    {
        if($request->hapus == 'hapus'){
            $user = Auth::user()->email;
            $rekrut = DB::table('rekrut0')->where('untuk',$user)->first();
            $test = DB::table('rekrut0')->where('untuk',$user)->orWhere('dari',$user);
            
            if($rekrut->dari == $user){
                $test->where('dari',$user)->update([
                    'notif_dari' => 1
                ]);
            }else{
                $test->where('untuk',$user)->update([
                    'notif_untuk' => 1
                ]);
            }
            return redirect('/');

        }
    }
}

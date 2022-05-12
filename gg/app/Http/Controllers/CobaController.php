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

        $keyword = $request->keyword;
        $urutan = $request->urutan;
        
        if($urutan == 'terlama'){
            $urut = 'asc';
        }else{
            $urut = 'desc';
        }

        $db = DB::table('rekrut0')->where('dari',$user)
        ->orwhere('untuk',$user)
        ->first();

        if($db->dari == $user){
            $email = DB::table('rekrut0')->where('dari',$user)
            ->where('sampah_dari',0)
            ->where(function($query) use ($keyword){
                $query->where('nama', 'LIKE', '%'.$keyword.'%')
                ->orwhere('dari', 'LIKE', '%'.$keyword.'%')
                ->orwhere('untuk', 'LIKE', '%'.$keyword.'%')
                ->orwhere('alamat', 'LIKE', '%'.$keyword.'%')
                ->orwhere('provinsi', 'LIKE', '%'.$keyword.'%')
                ->orwhere('kota', 'LIKE', '%'.$keyword.'%')
                ->orwhere('no', 'LIKE', '%'.$keyword.'%')
                ->orwhere('telepon', 'LIKE', '%'.$keyword.'%')
                ->orwhere('email', 'LIKE', '%'.$keyword.'%')
                ->orwhere('posisi', 'LIKE', '%'.$keyword.'%')
                ->orwhere('jam', 'LIKE', '%'.$keyword.'%')
                ->orwhere('gaji', 'LIKE', '%'.$keyword.'%')
                ->orwhere('informasi', 'LIKE', '%'.$keyword.'%')
                ->orwhere('balasan', 'LIKE', '%'.$keyword.'%');
            })
            ->orderBy('created_at',$urut)
            ->get();

        }elseif($db->untuk == $user){
            $email = DB::table('rekrut0')->where('untuk',$user)
            ->where('sampah_untuk',0)
            ->where(function($query) use ($keyword){
                    $query->where('nama', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('dari', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('untuk', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('alamat', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('provinsi', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('kota', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('no', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('telepon', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('email', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('posisi', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('jam', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('gaji', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('informasi', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('balasan', 'LIKE', '%'.$keyword.'%');
                })
            ->orderBy('created_at',$urut)
            ->get();
        }else{
            dd($user);
        }
        return view('gawe.inbox', ['tes' => $email], compact(
            'email','keyword'));
    }

    Public function trash_index(Request $request){
        $user = Auth::user()->email;
        $mail = Rekrut::all();

        $keyword = $request->keyword;
        $urutan = $request->urutan;
        
        if($urutan == 'terlama'){
            $urut = 'asc';
        }else{
            $urut = 'desc';
        }

        $db = DB::table('rekrut0')->where('dari',$user)
        ->orwhere('untuk',$user)
        ->first();

        if($db->dari == $user){
            $email = DB::table('rekrut0')->where('dari',$user)
            ->where('sampah_dari',1)
            ->where(function($query) use ($keyword){
                $query->where('nama', 'LIKE', '%'.$keyword.'%')
                ->orwhere('dari', 'LIKE', '%'.$keyword.'%')
                ->orwhere('untuk', 'LIKE', '%'.$keyword.'%')
                ->orwhere('alamat', 'LIKE', '%'.$keyword.'%')
                ->orwhere('provinsi', 'LIKE', '%'.$keyword.'%')
                ->orwhere('kota', 'LIKE', '%'.$keyword.'%')
                ->orwhere('no', 'LIKE', '%'.$keyword.'%')
                ->orwhere('telepon', 'LIKE', '%'.$keyword.'%')
                ->orwhere('email', 'LIKE', '%'.$keyword.'%')
                ->orwhere('posisi', 'LIKE', '%'.$keyword.'%')
                ->orwhere('jam', 'LIKE', '%'.$keyword.'%')
                ->orwhere('gaji', 'LIKE', '%'.$keyword.'%')
                ->orwhere('informasi', 'LIKE', '%'.$keyword.'%')
                ->orwhere('balasan', 'LIKE', '%'.$keyword.'%');
            })
            ->orderBy('created_at',$urut)
            ->get();

        }elseif($db->untuk == $user){
            $email = DB::table('rekrut0')->where('untuk',$user)
            ->where('sampah_untuk',1)
            ->where(function($query) use ($keyword){
                    $query->where('nama', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('dari', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('untuk', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('alamat', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('provinsi', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('kota', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('no', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('telepon', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('email', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('posisi', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('jam', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('gaji', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('informasi', 'LIKE', '%'.$keyword.'%')
                    ->orwhere('balasan', 'LIKE', '%'.$keyword.'%');
                })
            ->orderBy('created_at',$urut)
            ->get();
        }else{
            dd($user);
        }
        return view('gawe.inbox_trash', ['tes' => $email], compact(
            'email','keyword'));
    }

    public function detail_index($id){
        $user = Auth::user()->email;

        $detail = DB::table('rekrut0')->where('id', $id)->get();
        
        foreach($detail as $d){
            
            if(!($d->dari==$user) && !($d->untuk==$user) ){
                return redirect('/inbox');
            }
            $pp = DB::table('profiles')->where('email',$d->untuk)->get();

            return view('gawe.inbox-detail', ['rekrut' => $detail],['profiles' => $pp]);
        }       
    }
    
    public function seen($id){
        $user = Auth::user()->email;
        $db = DB::table('rekrut0')->where('dari',$user)->orwhere('untuk',$user)->first();
        if($db->dari == $user){
            DB::table('rekrut0')->where('id',$id)->update(['seen_dari' => 1]);
        }elseif($db->untuk == $user){
            DB::table('rekrut0')->where('id',$id)->update(['seen_untuk' => 1]);
        }

    }

    public function balasan(Request $request, $id){
        
        if($request->hapus == 'hapus'){
            $user = Auth::user()->email;
            $rekrut = DB::table('rekrut0')->where('id',$id)->first();
            $test = DB::table('rekrut0')->where('id',$id);
            
            if($rekrut->dari == $user){
                $test->where('dari',$user)->update([
                    'sampah_dari' => 1
                ]);
            }else{
                $test->where('untuk',$user)->update([
                    'sampah_untuk' => 1
                ]);
            }
            return redirect('inbox');

        }else{
            DB::table('rekrut0')->where('id', $id)->update([
                'balasan'=> $request->balasan,
            ]);
            return redirect('inbox/'.$id);
        }
        

    }
    

}

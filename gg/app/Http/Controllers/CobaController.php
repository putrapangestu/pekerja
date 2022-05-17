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

        $search = $request->search;
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
            $role = 'dari';
        }elseif($db->untuk == $user){
            $role = 'untuk';
        }

        $table = DB::table('rekrut0')->where($role,$user);

        if(request()->routeIs('inbox')){
            $nama = 'sampah_'.$role;
            $nilai = 0;
        }elseif(request()->routeIs('inbox-in')){
            $nama = 'untuk';
            $nilai = $user;
        }elseif(request()->routeIs('inbox-out')){
            $nama = 'dari';
            $nilai = $user;
        }elseif(request()->routeIs('inbox-star')){
            $nama = 'star_'.$role;
            $nilai = 1;
        }
        elseif(request()->routeIs('inbox-trash')){
            $nama = 'sampah_'.$role;
            $nilai = 1;
        }

        if(!(request()->routeIs('inbox-trash'))){
            $sampah = 'sampah_'.$role;
            $sampah_nilai = 0;
        }else{
            $sampah = 'sampah_'.$role;
            $sampah_nilai = 1;
        }
        

        $email = DB::table('rekrut0')->where($role,$user)
        ->where($nama,$nilai)
        ->where($sampah,$sampah_nilai)
        ->where(function($query) use ($search){
            $query->where('nama', 'LIKE', '%'.$search.'%')
            ->orwhere('dari', 'LIKE', '%'.$search.'%')
            ->orwhere('untuk', 'LIKE', '%'.$search.'%')
            ->orwhere('alamat', 'LIKE', '%'.$search.'%')
            ->orwhere('provinsi', 'LIKE', '%'.$search.'%')
            ->orwhere('kota', 'LIKE', '%'.$search.'%')
            ->orwhere('no', 'LIKE', '%'.$search.'%')
            ->orwhere('telepon', 'LIKE', '%'.$search.'%')
            ->orwhere('email', 'LIKE', '%'.$search.'%')
                ->orwhere('posisi', 'LIKE', '%'.$search.'%')
                ->orwhere('jam', 'LIKE', '%'.$search.'%')
                ->orwhere('gaji', 'LIKE', '%'.$search.'%')
                ->orwhere('informasi', 'LIKE', '%'.$search.'%')
                ->orwhere('balasan', 'LIKE', '%'.$search.'%');
            })
            ->orderBy('created_at',$urut)
            ->paginate(10);
            
        $unseen = $table->where('seen_'.$role,0)->count();

           
        return view('gawe.inbox', compact(
            'unseen','email','search'));
    }

    public function star_inbox(Request $request, $id){
        $user = Auth::user()->email;
        $db = DB::table('rekrut0')->where('id',$id)->first();
        $update = DB::table('rekrut0')->where('id',$id);
        
        if($db->dari == $user){
            $update->update([
                'star_dari' => $request->star
            ]);
        }elseif($db->untuk == $user){
            $update->update([
                'star_untuk' => $request->star
            ]);
        }
       


        return redirect('inbox');
    }

    public function detail_index($id){
        $user = Auth::user()->email;

        $detail = DB::table('rekrut0')->where('id', $id)->get();
        $d = DB::table('rekrut0')->where('id', $id)->first();

        $db = DB::table('rekrut0')->where('dari',$user)
        ->orwhere('untuk',$user)
        ->first();

        if($db->dari == $user){
            $role = 'dari';
        }elseif($db->untuk == $user){
            $role = 'untuk';
        }else{
            return redirect('/inbox');
        }

        $table = DB::table('rekrut0')->where($role,$user);
        $unseen = $table->where('seen_'.$role,0)->count();            
        $pp = DB::table('profiles')->where('email',$d->untuk)->get();
        return view('gawe.inbox-detail', ['rekrut' => $detail],['profiles' => $pp], compact('unseen'));
               
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

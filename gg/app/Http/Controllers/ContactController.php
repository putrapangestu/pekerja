<?php

namespace App\Http\Controllers;
use app\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index(Request $request){
        $data = User::all();
        return view('gawe.contact', compact('data'));
    }
    public function contact(Request $request){
       // $model = new Contact;
        //$model->nama = $request->nama;
        //$model->email = $request->alamat;
       // $model->pesan = $request->pesan;
   
         // $model-> submit();
       DB::table('contact')->insert([
           'name'=> $request->name,
           'email'=> $request->email,
           'pesan'=>$request->pesan,
       ]);
    return redirect('kontak');
    }
    public function inbox_index(){

        $mails = DB::table('contact')->paginate();
        return view('admin.email-inbox')->with(compact('mails'));
    }
    public function inbox_detail($id){
        $mail = DB::table('contact')->where('id',$id)->first();
        return view('admin.email-read')->with(compact('mail'));
    }
    public function seen($id){
        $db = DB::table('contact')->where('id',$id)->update(['seen'=>1]);
       

    }
}
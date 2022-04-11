<?php

namespace App\Http\Controllers;
use app\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index(Request $request){
        return view('gawe.contact');
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
    return redirect('contact');
    }
}
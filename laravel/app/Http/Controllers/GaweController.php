<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaweController extends Controller
{
    // index
    public function index(Request $request){

        return view('gawe.index3');
    }
    public function indexasli(Request $request){
        
        return view('gawe.index2');
    }

    // login
    // public function login(Request $request){
        
    //     return view('gawe.login');
    // }
    public function registrasi(Request $request){
        
        return view('gawe.signup');
    }
    public function lupapassword(Request $request){
        
        return view('gawe.recovery_password');
    }

    // list
    public function listings(Request $request){
        
        return view('gawe.listings2');
    }
    public function listingsumum(){
        
        return view('gawe.listings3');
    }
    public function listingsdetails(Request $request){
        
        return view('gawe.listings-details1');
    }
    public function listingsdetailsumum(Request $request){
        
        return view('gawe.listings-details');
    }

    //contact
    public function contact(){
        
        return view('gawe.contact1');
    }
    public function contactumum(Request $request){
        
        return view('gawe.about1');
    }

    // blog
    public function blog(Request $request){
        
        return view('gawe.blog1');
    }
    public function blogdetails(Request $request){
        
        return view('gawe.blog-detail1');
    }
    public function blogdetailsumum(Request $request){
        
        return view('gawe.blog-detail');
    }
    public function blogumum(Request $request){
        
        return view('gawe.blog');
    }

    // profile
    public function profileperusahaan(Request $request){
        
        return view('gawe.profile1');
    }
    public function editperusahaan(Request $request){
        
        return view('gawe.profile1');
    }

    public function profilepekerja(Request $request){
        
        return view('gawe.profile');
    }
    public function editpekerja(Request $request){
        
        return view('gawe.profile');
    }

    // about
    public function about(Request $request){
        
        return view('gawe.about1');
    }
    public function aboutumum(Request $request){
        
        return view('gawe.about');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class GaweController extends Controller
{
    // index
    public function index(Request $request){
        $errors = Profile::all();
        // $errors = Blog::all();

        return view('gawe.index3');
    }

    // list
    public function listings(Request $request){
        $errors = Profile::all();

        return view('gawe.listings');
    }
 
    public function listingsdetails(Request $request){
        $errors = Profile::all();

        return view('gawe.listings-details');
    }
    


    // blog
    public function blog(Request $request){
        
        return view('gawe.blog');
    }
    public function blogdetails(Request $request){
        
        return view('gawe.blog-detail');
    }

    // about
    public function about(Request $request){
        
        return view('gawe.about');
    }
 

}

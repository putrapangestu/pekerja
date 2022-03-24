<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class GabutController extends Controller
{
    //listing
    public function listings(Request $request){
        $errors = Profile::all();

        return view('gawe.listings', compact(
            'errors'
        ));
    }

    public function listingsdetails($telepon){

        $errors = DB::table('profiles')->where('telepon',$telepon)->get();
        return view('gawe.listings-details',['profiles' => $errors]);




        // $errors = Profile::all();

        // return view('gawe.listings-details', compact(
        //     'errors'
        // ));
    }
}

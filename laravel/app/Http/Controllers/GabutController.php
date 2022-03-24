<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class GabutController extends Controller
{
    //listing
    public function listings(Request $request){
        $errors = Profile::all();

        return view('gawe.listings', compact(
            'errors'
        ));
    }

    public function listingsdetails(Request $request){
        $errors = Profile::all();

        return view('gawe.listings-details', compact(
            'errors'
        ));
    }
}

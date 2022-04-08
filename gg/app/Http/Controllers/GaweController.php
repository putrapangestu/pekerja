<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GaweController extends Controller
{
    public function index(){
        $user = Auth::user();
        $data = User::all();
        
        return view('index', compact('user', 'data'));
    }
}

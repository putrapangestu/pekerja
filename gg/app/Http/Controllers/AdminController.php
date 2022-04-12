<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user(){
        return view('admin.user');
    }
    public function dashboard(){
        return view('admin.index');
    }
    public function blog(){
        return view('admin.blog');
    }
    public function create(){
        return view('admin.create-blog');
    }
}

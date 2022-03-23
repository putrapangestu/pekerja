<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        return view('gawe.blog');
    }

    public function detail(){

        return view('gawe.blog-detail');
    }
}

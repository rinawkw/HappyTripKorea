<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use DB;

class BlogController extends Controller
{
    public function index()
    {
        $blog = blog::all();
//        dd($blog[0]);
        return view('blog.index',compact('blog'));
    }
}

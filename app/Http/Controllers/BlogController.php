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
        return view('blog.index',compact('blog'));
    }
}

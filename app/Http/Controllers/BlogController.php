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
    public function tambah()
	{
		return view('/admin/createpost');
	}
	public function lihat(){
		return view('admin/lihatpost');
	}
    public function submitTambah(Request $request)
	{
		$blog = new blog();
		$blog->blog_title = $request->input('title-blog');
		$blog->blog_content = $request->input('content-blog');
		$blog->blog_picture= "";
		$blog->save();
		$blog = blog::all();
		return view('/admin/lihatpost', compact('blog'));
	}
}

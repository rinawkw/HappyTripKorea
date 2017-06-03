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
	public function edit($id){
		$blog = DB::table('blog')->where('blog_id',$id)->first();
		return view('/admin/editpost',compact('blog'));
	}
	public function lihat(){
		$blog = blog::all();
		return view('admin/lihatpost',compact('blog'));
	}
    public function submitTambah(Request $request)
	{
		$blog = new blog();
		$blog->blog_title = $request->input('title-blog');
		$blog->blog_content = $request->input('content-blog');
		$blog->blog_picture= "";
		$blog->save();
		return redirect('admin/lihatpost');
	}
	public function submitEdit(Request $request, $id){
		DB::table('blog')->where('blog_id', $id)->update([
			'blog_title' => $request->input('title-blog'),
			'blog_content' => $request->input('content-blog'),
		]);
		return redirect('admin/lihatpost');
	}
}

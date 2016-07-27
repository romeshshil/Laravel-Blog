<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Blog; 
use App\Category; 

class BlogController extends Controller
{
	public function index() {

		$blog=Blog::all();	
		return view('admin.blog.index',compact('blog'));

	}

	public function create() {
		$categorylist=Category::all();
		return view('admin.blog.create',compact('categorylist'));
	}

	public function store(Request $requests) {

			$blogPhoto=$requests->file('photo');
			$upload='upload/blog';
			$filename=$blogPhoto->getClientOriginalName();
			$sucess=$blogPhoto->move($upload,$filename);

		if($sucess) {
			$blogs= new Blog();
			$blogs->user_id=$requests->Input('user_id');
			$blogs->blog_title=$requests->Input('blog_title');
			$blogs->category_id=$requests->Input('category_name');
			$blogs->desc=$requests->Input('desc');
			$blogs->photo=$filename;
			$blogs->save();
			return redirect('blog/list');

			}
		}

	public function edit($id) {
		$blogs=Blog::find($id);
		$categorylist=Category::all();
		$self=$this;
		return view('admin.blog.edit', compact('blogs','categorylist','self'));
	}

	public function processCatlistOptions($lists,$selected=null)
	{ 
		foreach($lists as $list)
			{
				$select=($list->id==$selected)? ' selected="selected" ': ' ';
				echo '<option'.$select.'value="'.$list->id.'">'.$list->name.'</option>';
			}
	}

	public function update(Request $requests,$id){
		$blogs= Blog::find($id);
		$blogPhoto=$requests->file('photo');
		if(!empty($blogPhoto))
		{
			$upload='upload/blog';
			$filename=$blogPhoto->getClientOriginalName();
			$sucess=$blogPhoto->move($upload,$filename); 
			$blogs->photo=$filename;
		}           
			$blogs->blog_title=$requests->Input('blog_title');
			$blogs->category_id=$requests->Input('category_name');
			$blogs->desc=$requests->Input('desc');
			$blogs->save();
			return redirect('blog/list');
		}


	public function delete($id) {
		$blogs=Blog::find($id);
		$blogs->delete();
		return redirect('blog/list');
	}

}

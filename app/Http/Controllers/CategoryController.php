<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;

class CategoryController extends Controller
{
    
    public function index() {

		$category=Category::all();

		return view('admin.category.index',compact('category'));

	}

	public function create() {

		return view('admin.category.create');
	}

	public function store(Request $requests) {

		$category=new Category();
			$category->name=$requests->Input('name');
			$category->save();
			return redirect('category/list');
	}

	public function edit($id) {
		$category=Category::find($id);
		return view('admin.category.edit', compact('category'));
	}

	public function update(Request $requests, $id) {

		$category=Category::find($id);
			$category->name=$requests->Input('name');
			$category->save();
			return redirect('category/list');

	}

	public function delete($id) {
		$category=Category::find($id);
			$category->delete();
			return redirect('category/list');
	}


}

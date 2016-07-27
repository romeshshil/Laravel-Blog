<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

use App\Admin;


class AdminController extends Controller
{
    public function __construct() {
    	$this->middleware('admins',['except' => 'getLogout']);
    }



	public function index() {

		$admin=Admin::all();

		return view('admin.users.index',compact('admin'));

	}

	public function getLogout() {
    	Auth::guard('admins')->logout();
    	return redirect('admin/login');
    }

	public function create() {

		return view('admin.users.create');
	}


	public function store(Request $requests) {

		$admin=new Admin();

		$admin->name=$requests->Input('name');
		$admin->email=$requests->Input('email');
		$admin->uname=$requests->Input('uname');
		$admin->user_type=$requests->Input('user_type');
		$admin->password=bcrypt($requests->Input('password'));
		$admin->save();
		return redirect('user/list');
	}


	public function edit($id) {

		$admin=Admin::find($id);
		return view('admin.users.edit',compact('admin'));
	}

	public function update(Request $requests,$id) {

		$admin=Admin::find($id);

			$admin->name=$requests->Input('name');
			$admin->email=$requests->Input('email');
			$admin->uname=$requests->Input('uname');
			$admin->user_type=$requests->Input('user_type');
			$admin->save();
			return redirect('user/list');
		}
	public function delete($id) {

		$admin=Admin::find($id);
		$admin->delete();
		return redirect('user/list');
	}



	

}
		



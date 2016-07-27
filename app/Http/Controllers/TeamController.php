<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Team;

class TeamController extends Controller
{
   
	public function index() {

		$teams=Team::all();
		return view('admin.team.index',compact('teams'));
	}


	public function create() {

		return view('admin.team.create');
	}

		public function store(Request $requests) {

		$TeamImage=$requests->file('photo');
		$upload='upload/team';
		$fileName=$TeamImage->getClientOriginalName();
		$sucess=$TeamImage->move($upload,$fileName);
		if($sucess) {

			$teams=new Team();
			$teams->name=$requests->Input('name');
			$teams->email=$requests->Input('email');
			$teams->designation=$requests->Input('designation');
			$teams->fb=$requests->Input('fb');
			$teams->tw=$requests->Input('tw');
			$teams->gl=$requests->Input('gl');
			$teams->ln=$requests->Input('ln');
			$teams->photo=$fileName;
			$teams->save();
			return redirect('team/list');
		}
	}


	public function edit($id) {
		$team=Team::find($id);
		return view('admin.team.edit',compact('team'));
	}

	public function update(Request $requests,$id) {

		$TeamImage=$requests->file('photo');
		$upload='upload/team';
		$fileName=$TeamImage->getClientOriginalName();
		$sucess=$TeamImage->move($upload,$fileName);
		if($sucess) {

			$teams=Team::find($id);
			$teams->name=$requests->Input('name');
			$teams->email=$requests->Input('email');
			$teams->designation=$requests->Input('designation');
			$teams->fb=$requests->Input('fb');
			$teams->tw=$requests->Input('tw');
			$teams->gl=$requests->Input('gl');
			$teams->ln=$requests->Input('ln');
			$teams->photo=$fileName;
			$teams->save();
			return redirect('team/list');
		}
	}

	public function delete($id) {
		$team=Team::find($id);
		$team->delete();
		return view('team/list');
	}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Setting;

class SettingController extends Controller
{

   
	public function view() {

			$settings=Setting::all();
			return view(compact($settings));

	}


	public function edit() {

        $setting = Setting::find(1);
        return view('admin.setting.edit',compact('setting'));
	}

	public function update(Request $requests,$id) {

		$setting=Setting::find($id);

		$logo=$requests->file('image');
		$upload='upload/logo';
		$filename=$logo->getClientOriginalName();
		$sucess=$logo->move($upload,$filename);

		if($sucess) {

		$setting->site_name=$requests->Input('sitename');
		$setting->phone=$requests->Input('contactnumber');
		$setting->email=$requests->Input('contactemail');
		$setting->office_time=$requests->Input('officetime');
		$setting->copyright=$requests->Input('copyright');
		$setting->facebook=$requests->Input('facebook');
		$setting->twitter=$requests->Input('twlink');
		$setting->google=$requests->Input('googlelink');
		$setting->linkind=$requests->Input('linkind');
		$setting->aboutus=$requests->Input('aboutus');
		$setting->createdby=$requests->Input('createdby');
		$setting->image=$filename;
		$setting->save();
		return back()->with('msg', 'Update Sucessful');
		 }
	}
}

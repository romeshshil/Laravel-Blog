<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Slider;

class SliderController extends Controller
{
    

	public function index() {

		$slider=Slider::all();

		return view('admin.slider.index',compact('slider'));

	}


	public function create() {

		return view('admin.slider.create');
	}


	public function store(Request $requests) {

		$slider=new Slider();

		$slideImage=$requests->file('image');
		$upload='upload/slider';
		$fileName=$slideImage->getClientOriginalName();
		$sucess=$slideImage->move($upload,$fileName);

		if($sucess) {

			$slider->heading=$requests->Input('heading');
			$slider->desc=$requests->Input('desc');
			$slider->image=$fileName;
			$slider->save();
			return redirect('slider/list');

		}
	}

	public function edit($id) {

		$slider=Slider::find($id);
		return view('admin.slider.edit',compact('slider'));
	}


	public function update(Request $requests,$id) {

		$slideImage=$requests->file('image');
		$upload='upload/slider';
		$fileName=$slideImage->getClientOriginalName();
		$sucess=$slideImage->move($upload,$fileName);

		if($sucess) {

			$slider=Slider::find($id);
				$slider->heading=$requests->Input('heading');
				$slider->desc=$requests->Input('desc');
				$slider->image=$fileName;
				$slider->save();
				return redirect('slider/list');
		} 

	}

	public function delete($id) {

		$slider=Slider::find($id);
		$slider->delete();
		return redirect('slider/list');
	}


}

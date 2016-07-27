<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Service;

class ServiceController extends Controller
{
    
    public function index() {

    	$service=Service::all();
    	return view('admin.service.index',compact('service'));
    }

    public function create() {
    	return view('admin.service.create');
    }

    public function store(Request $requests) {

        $servicImage=$requests->file('image');
        $upload='upload/service';
        $filename=$servicImage->getClientOriginalName();
        $sucess=$servicImage->move($upload,$filename);

        if($sucess) {
            $service= new Service();
            $service->title=$requests->Input('title');
            $service->desc=$requests->Input('desc');
            $service->image=$filename;
            $service->save();
            return redirect('service/list');

        }
    }

    public function edit($id) {

        $service=Service::find($id);
        return view('admin.service.edit',compact('service'));

    }

    public function delete($id) {

        $service=Service::find($id);
        $service->delete();
        return redirect('service/list');
    }


    public function update(Request $requests,$id) {

        $service=Service::find($id);

        $servicImage=$requests->file('image');
        $upload='upload/service';
        $filename=$servicImage->getClientOriginalName();
        $sucess=$servicImage->move($upload,$filename);

        if($sucess) {

            $service->title=$requests->Input('title');
            $service->desc=$requests->Input('desc');
            $service->image=$filename;
            $service->save();
            return redirect('service/list');

        }

    }

}


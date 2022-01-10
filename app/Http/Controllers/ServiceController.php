<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;


class ServiceController extends Controller
{
    public function index(){

        // Model - singular = Service
        // Table - plural = services

        // $services = [
        //     'Service 1',
        //     'Service 2',
        //     'Service 3',
        //     'Service 4',
        // ];

        $services = Service::all();
  
        return view('service.index', compact('services'));
    }

    public function store(Service $service, Request $request){
        // dd($request->all());
        // dd(request('name'));

        $data = [
            'name' => 'required'
        ];

        request()->validate($data);
        // dd($data);  

        // $service = new Service();
        // $service->name = request('name');
        // $service->save();

        $service->create($request->all());

        // return redirect()->route('service.index');
        return redirect()->back();
        

    }
}

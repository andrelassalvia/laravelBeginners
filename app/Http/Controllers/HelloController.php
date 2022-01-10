<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class HelloController extends Controller
{
    public function index(){
        
        return view('app');
    }
    public function about(){
        
        return view('about');
    }
    public function services(){

        // Model - singular = Service
        // Table - plural = services


        // $services = [
        //     'Service 1',
        //     'Service 2',
        //     'Service 3',
        //     'Service 4',
        // ];

        $services = Service::all();


        
        return view('services', compact('services'));
    }

}

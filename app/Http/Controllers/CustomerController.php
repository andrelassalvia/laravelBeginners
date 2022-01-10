<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){

        $customers = Customer::all();
        return view('customer.index', compact('customers'));

    }

    public function create(){

        return view('customer.create');
    }

    public function store(Customer $customer, Request $request){

        $data = request()->validate([
            'name' => 'required|min:3',
            'email'=> 'required|email'
        ]); 

       $customer->create($data);

        return redirect()->back();
    }
}

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

    public function show($id){

        $customer = Customer::findOrFail($id);

        return view('customer.show', compact('customer'));

    }

    public function edit($id){

        $customer = Customer::findOrFail($id);

        return view('customer.edit', compact('customer'));

    }

    public function update(Customer $customer, $id){

        $data = request()->validate([
            'name'=>'required',
            'email'=>'email|required'
        ]);
        // dd($data);

        $customer = $customer->findOrFail($id);

        $customer->update($data);

        return redirect()->route('customer.index');

        

    }
}

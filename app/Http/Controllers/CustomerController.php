<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller

{
    public function index(){

        $customers = Customer::where('active',1)->orderBy('name', 'ASC')->get();
        return view('customer.index', compact('customers'));

    }

    public function create(){

        $customer = new Customer();

        return view('customer.create', compact('customer'));
    }

    public function store(Customer $customer,  CustomerRequest $validation){

        $data = $validation->all();

        $cus = $customer->create($data);

        // retorna para os detalhes do cliente cadastrado
        return redirect()->route('customer.show', $cus->id);
    }

    public function show($id){

        $customer = Customer::findOrFail($id);

        return view('customer.show', compact('customer'));

    }

    public function edit($id){

        $customer = Customer::findOrFail($id);

        return view('customer.edit', compact('customer'));

    }

    public function update(Customer $customer, $id, CustomerRequest $validation){

        $data = $validation->all();
        // dd($data);
        
        $customer = $customer->findOrFail($id);
        // dd($customer);
     
        
        $customer->update($data);

        return redirect()->route('customer.index');

    }

    public function destroy(Customer $customer, $id){
       $search = $customer->find($id);
    //    dd($search->id);

        $search->delete();
        
        return redirect()->route('customer.index');

    }
}

<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Customer $customers, Request $request)
    {
        if($request->only('search') && empty($request->input("search"))){
            return back();
        }
        
        $search = $request->input('search');
        $customers = $customers->where("nome", "like", '%' . $search . '%')
        ->orWhere("email", "like", '%' . $search . '%')
        ->orWhere("telefone", "like", '%' . $search . '%')
        ->paginate(5);

    	return view('customers.index',['customers' => $customers, 'search' => $search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customers, $customer)
    {
        //
        $customers = $customers->find($customer);
        return view("customers.show",["customer" => $customers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customers,$customer)
    {
        //
        $customers = Customers::find($customer);
        return view("customers.show",["customer" => $customers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customers, $customer)
    {
        //
        $customers = $customers->find($customer);
        $customers->delete();
        return back();
    }
}

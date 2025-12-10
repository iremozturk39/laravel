<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*$customer = Customer::where('id', 1)->get();
        $customer[0]->update([
            'address' => 'Kadıköy'
        ]);*/
        
        //$customer[0]->delete();

        //dd(Customer::all());
        

        /*$customers = Customer::all();
        
        foreach ($customers as $customer) {
            echo $customer->id . " - " . $customer->name . "<br />";
        }
        */
        $customers = Customer::all();
        return view('customers.list', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //echo "Create Customer Form";
        //dd('Debugging Create Method');
        Customer::create([
            'name' => 'İrem',
            'surname' => 'Öztürk',
            'birthYear' => '2004',
            'gender' => 'Female',
            'address' => 'Şişli, İstanbul', 
        ]);
        Customer::create([
            'name' => 'Emre',
            'surname' => 'Akadal',
            'birthYear' => '1988',
            'gender' => 'Male',
            'address' => 'Beylikdüzü, İstanbul', 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        $customer->update([
            'address' => 'Beşiktaş, İstanbul'
        ]);
        dd(Customer::all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}

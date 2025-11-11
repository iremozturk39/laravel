<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class TempController extends Controller
{
    public function tmpFunction()
    {
        $c = Customer::firstOrCreate(['email' => 'demo@example.com'], ['name' => 'Demo']);
        $c->meals()->firstOrCreate(['name' => 'Salad'], ['calories' => 150]);
        $c->load('meals');
        return "Customer: {$c->name} | Meals: " . $c->meals->pluck('name')->join(', ');
    }
}

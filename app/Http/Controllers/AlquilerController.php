<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Alquiler;
use App\Models\Customer;

class AlquilerController extends Controller
{
    public function store(){
        $customers = Customer::all();

        return view("logic.Alquiler", compact("customers"));
    }
}

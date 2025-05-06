<?php

namespace App\Http\Controllers;

use App\Models\lgenals;
use Illuminate\Http\Request;
use App\Models\Alquilers;

class OrdenController extends Controller
{
    public function edit($id)
    {
        $clienteL = alquilers::findOrFail($id);
        return view("screens.orden", compact("clienteL"));
    }


}

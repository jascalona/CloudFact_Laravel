<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\parks;

class ParkController extends Controller
{
   public function edit($id){
     $device = parks::findOrFail($id);
    return view("logic.Upark", compact("device"));
   }
}

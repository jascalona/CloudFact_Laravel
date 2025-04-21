<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class ScreensController extends Controller
{
    /**
     * CRATION ROUTES SCREENS
     */

     public function park(){
        return view("screens.park");
     }

     public function lead(){

         $customers = Customer::all();
         return view("screens.lead", compact("customers"));
     }

    public function Lgeneral(){
        //$table = "load_reading";
        
        return view("screens.Lgeneral");
    }

}

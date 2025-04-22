<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Park;
use App\Models\Lgenal;

class ScreensController extends Controller
{
    /**
     * CRATION ROUTES SCREENS
     */

     public function Park(){
        $parks = Park::all();
        
        //return  $parks;
        return view("screens.park",compact("parks"));
    }

     public function lead(){

         $customers = Customer::all();
         return view("screens.lead", compact("customers"));
     }

    public function Lgeneral(){
        //$table = "load_reading";
        $Lgenals = Lgenal::all();
        return view("screens.Lgeneral", compact("Lgenals"));
    }

    public function LCustomer(){
        $Lgenals = Lgenal::all();
        return view("layouts.LCustomer", compact("Lgenals"));
    }

}

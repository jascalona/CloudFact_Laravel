<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Park;
use App\Models\Lgenal;
use App\Models\Contact;
use App\Models\lgenals;
use PhpParser\Node\Expr\AssignOp\Concat;

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



    public function show($id){
        $clienteL = Customer::findOrFail($id);
        $load = lgenals::all();
        return view("layouts.LCustomer", compact("clienteL", "load"));
    }



    public function bill(){
        $customers = Customer::all();
        return view("screens.bill" , compact("customers"));
    }

    public function install(){
        return view("screens.install");
    }

    public function contact(){
        $customers  = Customer::all();
        return view("screens.contact", compact("customers"));
    }

    public function new_contact(){
        return view("logic.new_contact");
    }

    public function contract(){
        return view("screens.contract");
    }

    public function edit($id){
        $cliente = Customer::findOrFail( $id );
        return view("logic.VContact", compact("cliente"));
    }


}

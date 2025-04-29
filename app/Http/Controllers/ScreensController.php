<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Park;
use App\Models\Lgenal;
use App\Models\Contact;
use App\Models\lgenals;
use PhpParser\Node\Expr\AssignOp\Concat;
use App\Http\Controllers\CustomerRequest;


class ScreensController extends Controller
{
    /**
     * CRATION ROUTES SCREENS
     */

    public function Park()
    {
        $parks = Park::all();

        //return  $parks;
        return view("screens.park", compact("parks"));
    }

    public function lead()
    {

        $customers = Customer::all();
        return view("screens.lead", compact("customers"));
    }

    public function Lgeneral()
    {
        //$table = "load_reading";
        $Lgenals = Lgenal::all();
        return view("screens.Lgeneral", compact("Lgenals"));
    }



    public function show($id)
    {
        $clienteL = Customer::findOrFail($id);
        $load = lgenals::all();
        return view("layouts.LCustomer", compact("clienteL", "load"));
    }



    public function bill()
    {
        $customers = Customer::all();
        return view("screens.bill", compact("customers"));
    }

    public function install()
    {
        return view("screens.install");
    }

    public function contact()
    {
        $customers = Customer::all();
        return view("screens.contact", compact("customers"));
    }

    public function new_contact()
    {
        return view("logic.new_contact");
    }

    public function contract()
    {
        return view("screens.contract");
    }


    /**Method Edit */
    public function edit($id)
    {
        $cliente = Customer::findOrFail($id);
        return view("logic.VContact", compact("cliente"));
    }

    /**Method Update */
    public function update(Request $request, $id)
    {
        $data = request()->validate(
            [
                'name' => 'required',
                'rif' => 'required',
                'direct_f' => 'required',
                'city' => 'required',
                'estado' => 'required',
                'date_creation' => 'required',
                'p_contact' => 'required',
                'p_email' => 'required',

            ],

            /**Message Validation */
            [
                'name.required' => 'Este Campo no puede quedar vacio!',
                'rif.required' => 'Este Campo no puede quedar vacio!',
                'direct_f.required' => 'Este Campo no puede quedar vacio!',
                'city.required' => 'Este Campo no puede quedar vacio!',
                'estado.required' => 'Este Campo no puede quedar vacio!',
                'date_creation.required' => 'Este Campo no puede quedar vacio!',
                'p_contact.required' => 'Este Campo no puede quedar vacio!',
                'p_email.required' => 'Este Campo no puede quedar vacio!'
            ]

        );

        $cliente =Customer::findOrFail($id);
        $cliente->name = $request->name;
        $cliente->rif = $request->rif;
        $cliente->direct_f = $request->direct_f;
        $cliente->city = $request->city;
        $cliente->estado = $request->estado;
        $cliente->date_creation = $request->date_creation;
        $cliente->p_contact = $request->p_contact;
        $cliente->p_email = $request->p_email;
        $cliente->p_movil = $request->p_movil;
        $cliente->save();
        return redirect()->route('contact')->with('success', 'El Contacto se modifico con Exito!');


    }

}

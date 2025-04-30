<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\parks;

class ParkController extends Controller
{

   /**NEW DEVICE IN PARK */
   public function store(Request $request)
   {
      //Nuevas Instancia
      if (!empty($_POST['new_device'])) {
         # code...
      } else {
         # code...
      }

   }















   /**Metodo show-edit */
   public function edit($id)
   {
      $device = parks::findOrFail($id);
      return view("logic.Upark", compact("device"));
   }


   /**Metodo Update */
   public function update(Request $request, $id)
   {

      if (!empty($_POST['edit_park'])) {

         if (
            !empty($_POST['rif']) and !empty($_POST['serial']) and !empty($_POST['model']) and !empty($_POST['location'])
            and !empty($_POST['city']) and !empty($_POST['estado']) and !empty($_POST['date_insta'])
         ) {

            /**Modificacion */
            $device = parks::findOrFail($id);
            $device->rif = $request->rif;
            $device->serial = $request->serial;
            $device->model = $request->model;
            $device->location = $request->location;
            $device->city = $request->city;
            $device->estado = $request->estado;
            $device->date_insta = $request->date_insta;
            $device->p_contact = $request->p_contact;
            $device->p_email = $request->p_email;
            $device->p_movil = $request->p_movil;
            $device->n_port = $request->n_port;
            $device->cont_insta_bn = $request->cont_insta_bn;
            $device->cont_insta_color = $request->cont_insta_color;
            $device->obser = $request->obser;
            $device->save();
            return redirect()->route('.park')->with('success', 'El Registro se fue modificado con exito!');


         } else {
            return redirect()->route('Upark.edit', $id)->with('warning', 'Los Campos primarios no pueden quedar vacios. ¡Por favor inserte los datos solicitados!');
         }




      } else {
         echo '<script>alert("error")</script>';

      }




   }

}

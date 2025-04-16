<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScreensController extends Controller
{
    /**
     * CRATION ROUTES SCREENS
     */

     public function park(){
        return view("screens.park");
     }

}

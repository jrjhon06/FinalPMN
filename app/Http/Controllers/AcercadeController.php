<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcercadeController extends Controller
{
    public function mostrarInformacion()
    {
        return view('acercade');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    public function prueba($mensaje)
    {
        return $mensaje;
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerFacturacion extends Controller
{
    public function facturacion()
    {
        return view('Admin.mensajeFacturacion')->with(['text'=>'Debes dinero a hacienda']);
    }
}

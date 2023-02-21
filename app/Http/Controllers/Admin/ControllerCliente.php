<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerCliente extends Controller
{
    public function cliente()
    {
        return view('Admin.mensajeCliente')->with(['text'=>'Soy el cliente']);
    }
}

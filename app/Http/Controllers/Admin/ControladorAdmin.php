<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ControladorAdmin extends Controller
{
    public function articulos()
    {
        return view('Admin.mensajeAdmin')->with(['text'=>'Bienvenidos a la pagina artículos']);
    }

    public function clientes()
    {
        return view('Admin.mensajeCliente')->with(['text'=>'Soy el cliente']);
    }

    public function contabilidad()
    {
        return view('Admin.mensajeContabilidad')->with(['text'=>'Estas en negativos']);
    }

    public function facturacion()
    {
        return view('Admin.mensajeFacturacion')->with(['text'=>'Debes dinero a hacienda']);
    }
    
}

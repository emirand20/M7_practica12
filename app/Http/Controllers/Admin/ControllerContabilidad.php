<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerContabilidad extends Controller
{
    public function contabilidad()
    {
        return view('Admin.mensajeContabilidad')->with(['text'=>'Estas en negativos']);
    }
}

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControllerContabilidad;
use App\Http\Middleware\CheckContabilidad;

Route::get('articulos', [ControllerContabilidad::class,'contabilidad'])->middleware(CheckContabilidad::class);

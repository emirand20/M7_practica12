<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControllerFacturacion;
use App\Http\Middleware\CheckFacturacion;

Route::get('articulos', [ControllerFacturacion::class,'facturacion'])->middleware(CheckFacturacion::class);

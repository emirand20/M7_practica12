<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControllerCliente;
use App\Http\Middleware\CheckCliente;

Route::get('articulos', [ControllerCliente::class,'cliente'])->middleware(CheckCliente::class);

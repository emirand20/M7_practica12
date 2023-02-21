<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControladorAdmin;
use App\Http\Middleware\CheckAdmin;

Route::get('facturacion', [ControladorAdmin::class,'facturacion'])->middleware(CheckAdmin::class);

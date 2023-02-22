<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControladorAdmin;
use App\Http\Middleware\CheckAdmin;

Route::get('home', [ControladorAdmin::class,'articulos'])->middleware(CheckAdmin::class)->name('entrada');
Route::get('clientes', [ControladorAdmin::class,'clientes'])->middleware(CheckAdmin::class);
Route::get('facturacion', [ControladorAdmin::class,'facturacion'])->middleware(CheckAdmin::class);
Route::get('contabilidad', [ControladorAdmin::class,'contabilidad'])->middleware(CheckAdmin::class);

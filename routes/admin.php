<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControladorAdmin;
use App\Http\Middleware\CheckAdmin;

Route::get('home', [ControladorAdmin::class,'articulos'])->middleware(CheckAdmin::class)->name('home');
Route::get('clientes', [ControladorAdmin::class,'clientes'])->middleware(CheckAdmin::class)->name('clientes');
Route::get('facturacion', [ControladorAdmin::class,'facturacion'])->middleware(CheckAdmin::class)->name('facturacion');
Route::get('contabilidad', [ControladorAdmin::class,'contabilidad'])->middleware(CheckAdmin::class)->name('contabilidad');

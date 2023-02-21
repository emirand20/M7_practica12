<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControladorAdmin;
use App\Http\Middleware\CheckAdmin;

Route::get('contabilidad', [ControladorAdmin::class,'contabilidad'])->middleware(CheckAdmin::class);

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControladorAdmin;
use App\Http\Middleware\CheckAdmin;

Route::get('articulos', [ControladorAdmin::class,'articulos'])->middleware(CheckAdmin::class);

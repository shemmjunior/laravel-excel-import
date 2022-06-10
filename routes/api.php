<?php

use App\Http\Controllers\CargoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/cargos', [CargoController::class, 'getCargos']);
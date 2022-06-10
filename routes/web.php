<?php

use App\Http\Controllers\CargoController;
use Illuminate\Support\Facades\Route;

/** Root route */
Route::get('/', [CargoController::class, 'index']);

/** View imported data route */
Route::get('/view-data', [CargoController::class, 'viewData']);

/** Import excel data to the database */
Route::post('/import', [CargoController::class, 'importExcel']);
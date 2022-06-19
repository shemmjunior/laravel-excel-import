<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\CarsController;

/** Authentication routes */
Route::get('/register', [UserController::class, 'register']);
Route::get('/', [UserController::class, 'login']);
Route::post('/authenticate', [UserController::class, 'authenticate']);
Route::post('/signup', [UserController::class, 'signup']);
Route::post('/logout', [UserController::class, 'logout']);


/** Root route */
Route::get('/home', [CargoController::class, 'index']);

/** View imported data route */
Route::get('/view-data', [CargoController::class, 'viewData']);

/** Import excel data to the database */
Route::post('/import', [CargoController::class, 'importExcel']);

/** Cars routes */
Route::get('/cars', [CarsController::class, 'createCar']);
Route::post('/storeCar', [CarsController::class, 'storeCar']);
Route::get('/audit', [CarsController::class, 'viewAudit']);



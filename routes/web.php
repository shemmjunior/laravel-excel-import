<?php

use Illuminate\Support\Facades\Route;

/** Root route */
Route::get('/', function () {
    return view('index');
});

/** View imported data route */
Route::get('/view-data', function () {
    return view('view');
});

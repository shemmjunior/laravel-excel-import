<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Rap2hpoutre\FastExcel\FastExcel;

class CargoController extends Controller
{
    /**
     * View root page.
     */
    public function index() {
        return view('index');
    }

    /**
     * View imported data.
     */
    public function viewData() {
        return view('view');
    }

    /**
     * Import data from Excel file.
     */
    public function importExcel(Request $request) {
      

 
    }
}

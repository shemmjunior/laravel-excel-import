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
    public function index()
    {
        return view('index');
    }

    /**
     * View imported data.
     */
    public function viewData()
    {
        $cargos = DB::select('CALL get_cargos()');
        return view('view', ['cargos' => $cargos]);
    }

    /**
     * Import data from Excel file.
     */
    public function importExcel(Request $request)
    {
        /** If request has a file continue with import process otherwise return an error */
        if ($request->hasFile('excel-file')) {
            
            /** Get file property from request and upload it to local (Files folder) */
            $file = $request->file('excel-file')->store('files', 'local');
            
            /** Get the saved file location and extract data ready to be imported to the database */
            $imported_excel_data = (new FastExcel)->import(storage_path('app/' . $file));
            
            /** Convert imported data from string into an array */
            $excel_data = json_decode($imported_excel_data, TRUE);

            /** Loop through the excel_data array and format excel sheet columns into associated database columns values */
            $cargo_data = array_map(function ($excel_data) {
                return array(
                    'cargo_no' => $excel_data['Cargo no'],
                    'cargo_type' => $excel_data['Cargo type'],
                    'cargo_size' => $excel_data['Cargo size'],
                    'weight' => $excel_data['Weight (Kg)'],
                    'remarks' => $excel_data['Remarks'],
                    'wharfage' => $excel_data['Wharfage (USD)'],
                    'penalty' => $excel_data['Penalty (Days)'],
                    'storage' => $excel_data['Storage (USD)'],
                    'electricity' => $excel_data['Electricity (USD)'],
                    'destuffing' => $excel_data['Destuffing(USD)'],
                    'lifting' => $excel_data['Lifting (USD)'],
                );
            }, $excel_data);

            /** Insert the formatted cargo
             *  data into the database by transaction 
             */
            DB::beginTransaction();
            try {
                foreach ($cargo_data as $cargo) {
                    DB::select('CALL insert_cargo(?,?,?,?,?,?,?,?,?,?,?)', array(
                        $cargo['cargo_no'],
                        $cargo['cargo_type'],
                        $cargo['cargo_size'],
                        $cargo['weight'],
                        $cargo['remarks'],
                        $cargo['wharfage'],
                        $cargo['penalty'],
                        $cargo['storage'],
                        $cargo['electricity'],
                        $cargo['destuffing'],
                        $cargo['lifting']
                    ));
                }

                DB::commit();
                return redirect('/')->with('success', 'Data imported successfully!');
            } catch (\Exception $e) {
                /** Rollback the transaction if any error is caught */
                DB::rollback();
                return redirect('/')->with('error', $e->getPrevious()->getMessage());
            }
        } else {
            return redirect('/')->with('error', 'Please select an excel file to continue');
        }
    }
}

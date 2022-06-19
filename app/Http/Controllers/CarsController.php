<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    //
    public function createCar() {
        return view('cars.create');
    }

    public function viewCars() {
        return view('cars.view');
    }


    public function storeCar(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3']
        ]);
        $formFields['user_id'] = auth()->id();
        Car::create($formFields);
        return redirect('/home')->with('message', 'Car created successfully!');

    }

    public function viewAudit() {
        return view('audit.index');
    }
}

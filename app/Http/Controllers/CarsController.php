<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cars extends Controller
{
    public function index()
    {
        $cars =Car::all();
        return view('car.index',['cars' => $cars]);
    }
    public function show($id)
    {
        $car =Car::findOrFail($id);
        return view('cars.show',['car' => $car]);
    }

    public function destroy($id)
    {
        $car =Car::findOrFail($id);
        $car ->delete();
        return redirect('cars');
    }

}







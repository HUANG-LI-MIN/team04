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
}

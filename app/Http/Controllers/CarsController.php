<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\DB;
use Request;
class CarsController extends Controller
{
   public function store()
   {
      $input=Request::all();
      Car::create($input);
      return redirect('cars');
   }
   
    public function index()
    {
        $cars =Car::all();
        return view('cars.index',['cars' => $cars]);
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
    public function create()
    {
        $brands=DB::table('brands')
          ->select('brands.id','brands.brand')
          ->orderBy('brands.id','asc')
          ->get();
        $data=[];
        foreach($brands as $brand)
        {
            $data[$brand->id]=$brand->brand;
        }
        return view('cars.create',['brands' =>$data]);
    }




}

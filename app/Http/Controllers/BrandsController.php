<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;
class BrandsController extends Controller
{
    public function index()
    {
        $brands =Brand::all();
        return view('brands.index',['brands' => $brands]);
    }
    public function show($id)
    {
        $brand =Brand::findOrFail($id);
        return view('brands.show',['brand' => $brand]);
    }
    

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();
        return redirect('brands');
    }
    public function create()
    {
        $brands=DB::table('cars')
          ->select('cars.id','cars.type')
          ->orderBy('cars.id','asc')
          ->get();
        $data=[];
        foreach($cars as $car)
        {
            $data[$car->id]=$car->type;
        }
     
        return view('brands.create',['cars' =>$data]);
    }
}

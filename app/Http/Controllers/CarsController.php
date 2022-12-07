<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Brand;
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
        $cars =Car::paginate(10);
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
      /*  $brands=DB::table('brands')
          ->select('brands.id','brands.brand')
          ->orderBy('brands.id','asc')
          ->get();
        $data=[];
        foreach($brands as $brand)
        {
            $data[$brand->id]=$brand->brand;
        }
        */ 
        $tags=Brand::orderby('brands.id','asc')->pluck('brands.brand','brands.id');
        
        return view('cars.create',['brands' =>$tags]);
    }
    public function edit($id)
    {
        $car =Car::findOrFail($id);
        $tags =Brand::orderby('brands.id','asc')->pluck('brands.brand','brands.id');
        $selectTag = $car->bid;
        return view('cars.edit',['car'=>$car,'brands'=>$tags, "selectBid"=>$selectTag]);

    }
    public function update($id)
    {
        $car = Car::findOrFail($id);
        $input = Request::all();

        $car->type = $input['type'];
        $car->bid = $input['bid'];
        $car->horsepower = $input['horsepower'];
        $car->cc = $input['cc'];
        $car->money = $input['money'];
        $car->variable_s = $input['variable_s'];
        $car->seats = $input['seats'];
        $car->save();

        return redirect('cars');
    }



}

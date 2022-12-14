<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateCarRequest;
use Illuminate\Http\Request;
class CarsController extends Controller
{
   public function store(CreateCarRequest $request)
   {
    $type = $request->input('type');
    $bid = $request->input('bid');
    $cc = $request->input('cc');
    $money = $request->input('money');
    $variable_s = $request->input('variable_s');
   

    $car = car::create([
        'type'=>$type,
        'bid'=>$bidbid,
        'cc'=>$cc,
        'money'=>$money,
        'variable_s'=>$variable_s,]);
      return redirect('cars');
   }
   
    public function index()
    {
        $cars =Car::paginate(10);
        $type=Car::alltype()->pluck('cars.type','cars.type');
        return view('cars.index',['cars'=> $cars,'type'=>$type]);
    }

    public function senior()
    {
        $cars =Car::senior()->paginate(10);
        $type =Car::alltype()->pluck('cars.type','cars.type');
        return view('cars.index',['cars'=> $cars,'type'=>$type]);
    }
    
    public function type(Request $request)
    {
        $cars =Car::type($request->input('type'))->paginate(10);
        $type =Car::alltype()->pluck('cars.type','cars.type');
        return view('cars.index',['cars'=> $cars,'type'=>$type]);
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
    public function update($id,CreateCarRequest $request)
    {
        $car = Car::findOrFail($id);
        
        $car->type = $request->input('type');
        $car->bid = $request->input('bid');
        $car->cc = $request->input('cc');
        $car-> money = $request->input('money');
        $car->variable_s = $request->input('variable_s');
        $car->save();

        return redirect('cars');
    }



}

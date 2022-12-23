<?php

namespace App\Http\Controllers;
//Suse Illuminate\Database\Eloquent\Model;
//use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\CreateBrandRequest;
class BrandsController extends Controller
{
    public function store(CreateBrandRequest $request)
   {
    $brand = $request->input('brand');
    $nationality = $request->input('nationality');
    $time = $request->input('time');
    $places = $request->input('places');
    $ceo = $request->input('ceo');
   

    $car = car::create([
        'brand'=>$brand,
        'nationality'=>$nationality,
        'time'=>$time,
        'places'=>$places,
        'ceo'=>$ceo,]);
      return redirect('brands');
   }
    public function index()
    {
        $brands =Brand::paginate(25);
        return view('brands.index',['brands' => $brands]);
    }
    public function japan()
    {
        $brands = Brand::japan('日本')->paginate(25);//->get();
        return view('brands.index', ['brands'=>$brands]);
    }

    public function usa()
    {
        $brands = Brand::usa('美國')->paginate(25);
        return view('brands.index', ['brands'=>$brands]);
    }
    public function germany()
    {
        $brands = Brand::germany('德國')->paginate(25);//->get();
        return view('brands.index', ['brands'=>$brands]);
    }
    public function UK()
    {
        $brands = Brand::UK('英國')->paginate(25);//->get();
        return view('brands.index', ['brands'=>$brands]);
    }
    public function France()
    {
        $brands = Brand::France('法國')->paginate(25);//->get();
        return view('brands.index', ['brands'=>$brands]);
    }
    public function Italy()
    {
        $brands = Brand::Italy('義大利')->paginate(25);//->get();
        return view('brands.index', ['brands'=>$brands]);
    }
    public function Taiwan()
    {
        $brands = Brand::Taiwan('台灣')->paginate(25);//->get();
        return view('brands.index', ['brands'=>$brands]);
    }


    public function show($id)
    {
        $brand =Brand::findOrFail($id);
        $cars=$brand->cars;
        return view('brands.show',['brand' => $brand,'cars'=>$cars]);
    }
    

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();
        return redirect('brands');
    }
    public function create()
    {
        return view('brands.create');
 
   }
   public function edit($id)
   {
    $brand =Brand::findOrFail($id);
    return view('brands.edit',['brand'=>$brand]);
   }
   public function update($id,CreateBrandRequest $request)
   {
       $brand = Brand::findOrFail($id);
       
       $brand->brand = $request->input('brand');
       $brand->nationality = $request->input('nationality');
       $brand->time = $request->input('time');
       $brand->places = $request->input('places');
       $brand->ceo = $request->input('ceo');
       $brand->save();

       return redirect('brands');
   }
}

<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;
use Request;
class BrandsController extends Controller
{
    public function store()
   {
      $input=Request::all();
      brand::create($input);
      return redirect('brands');
   }
    public function index()
    {
        $brands =Brand::paginate(10);
        return view('brands.index',['brands' => $brands]);
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
   public function update($id)
   {
       $brand = Brand::findOrFail($id);
       $input = Request::all();

       $brand->brand = $input['brand'];
       $brand->nationality = $input['nationality'];
       $brand->time = $input['time'];
       $brand->places = $input['places'];
       $brand->ceo = $input['ceo'];    
       $brand->save();

       return redirect('brands');
   }
}

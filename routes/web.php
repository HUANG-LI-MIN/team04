<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\BrandsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('cars');
});
Route::get('cars', [CarsController::class, 'index'])->name('cars.index');
Route::get('cars/{id}', [CarsController::class, 'show'])->where('id', '[0-9]+')->name('cars.show');
Route::delete('cars/delete/{id}', [CarsController::class, 'destroy'])->where('id', '[0-9]+')->name('cars.destroy');
Route::get('cars/create', [CarsController::class, 'create'])->name('cars.create');
Route::post('cars/store',[CarsController::class,'store'])->name('cars.store');

Route::get('brands/create', [BrandsController::class, 'create'])->name('brands.create');
Route::get('brands', [BrandsController::class, 'index'])->name('brands.index');
Route::get('brands/{id}', [BrandsController::class, 'show'])->where('id', '[0-9]+')->name('brands.show');
Route::delete('brands/delete/{id}', [BrandsController::class, 'destroy'])->where('id', '[0-9]+')->name('brands.destroy');
Route::post('brands/store',[BrandsController::class,'store'])->name('brands.store');
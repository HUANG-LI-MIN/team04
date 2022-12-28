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
Route::get('cars/{id}/edit', [CarsController::class, 'edit'])->where('id', '[0-9]+')->name('cars.edit');
Route::patch('cars/update/{id}', [CarsController::class, 'update'])->where('id', '[0-9]+')->name('cars.update');

Route::get('cars/senior', [CarsController::class, 'senior'])->name('cars.senior');
Route::post('cars/type', [CarsController::class, 'type'])->name('cars.type');

Route::get('brands/create', [BrandsController::class, 'create'])->name('brands.create');
Route::get('brands', [BrandsController::class, 'index'])->name('brands.index');
Route::get('brands/{id}', [BrandsController::class, 'show'])->where('id', '[0-9]+')->name('brands.show');
Route::delete('brands/delete/{id}', [BrandsController::class, 'destroy'])->where('id', '[0-9]+')->name('brands.destroy');
Route::post('brands/store',[BrandsController::class,'store'])->name('brands.store');
Route::get('brands/{id}/edit', [BrandsController::class, 'edit'])->where('id', '[0-9]+')->name('brands.edit');
Route::patch('brands/update/{id}', [BrandsController::class, 'update'])->where('id', '[0-9]+')->name('brands.update');

Route::get('brands/japan', [BrandsController::class, 'japan'])->name('brands.japan');
Route::get('brands/usa', [BrandsController::class, 'usa'])->name('brands.usa');
Route::get('brands/germany', [BrandsController::class, 'germany'])->name('brands.germany');
Route::get('brands/UK', [BrandsController::class, 'UK'])->name('brands.UK');
Route::get('brands/France', [BrandsController::class, 'France'])->name('brands.France');
Route::get('brands/Italy', [BrandsController::class, 'Italy'])->name('brands.Italy');
Route::get('brands/Taiwan', [BrandsController::class, 'Taiwan'])->name('brands.Taiwan');


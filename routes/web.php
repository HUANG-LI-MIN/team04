<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('cars', [CarsController::class, 'index'])->name('cars.index');
Route::get('cars/{id}', [CarsController::class, 'index'])->name('cars.show');

Route::get('cars/delete/{id}', [CarsController::class, 'destroy'])->where('id', '[0-9]+')->name('teams.destroy');
Route::get('brands/delete/{id}', [CarsController::class, 'destroy'])->where('id', '[0-9]+')->name('teams.destroy');

Route::get('brands', [BrnandsController::class, 'index'])->name('brands.index');
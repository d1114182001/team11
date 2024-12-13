<?php

use App\Http\Controllers\PopulationEducationsController;
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

/*Route::get('/', function () {
    return view('populationEducations');
});*/

Route::get('/', [PopulationEducationsController::class,'index']);
Route::get('/about', [PopulationEducationsController::class,'about'])->name('about');
Route::get('/{id}',[PopulationEducationsController::class,'show'])->where('id','[0-9]+')->name('region.show');
Route::get('/{id}/edit',[PopulationEducationsController::class,'edit'])->where('id','[0-9]+')->name('region.edit');
Route::delete('/delete/{id}',[PopulationEducationsController::class,'destroy'])->where('id','[0-9]+')->name('region.destroy');
Route::get('/region/create',[PopulationEducationsController::class,'create'])->name('region.create');
Route::post('/region/store',[PopulationEducationsController::class,'store'])->name('region.store');




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

Route::get('/{id}',[PopulationEducationsController::class,'show'])->where('id','[0-9]+')->name('region.show')->middleware('check.auth');
Route::get('/{id}/edit',[PopulationEducationsController::class,'edit'])->where('id','[0-9]+')->name('region.edit')->middleware('check.manager.or.admin');
Route::patch('/update/{id}',[PopulationEducationsController::class,'update'])->where('id','[0-9]+')->name('region.update')->middleware('check.manager.or.admin');
Route::delete('/delete/{id}',[PopulationEducationsController::class,'destroy'])->where('id','[0-9]+')->name('region.destroy')->middleware('can:admin');
Route::get('/region/create',[PopulationEducationsController::class,'create'])->name('region.create')->middleware('can:admin');
Route::post('/region/store',[PopulationEducationsController::class,'store'])->name('region.store')->middleware('check.manager.or.admin');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
Route::get('/about', [PopulationEducationsController::class,'about'])->name('about');;


<?php

use App\Http\Controllers\EducationContro2;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EducationContro;


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
    return view('welcome.home');
});



Route::get('education',[EducationContro::class,"index"]);
Route::get('education/{id}',[EducationContro::class,"show"])->where('id','[0-9]+')->name('ed.edshow');
Route::delete('education/delete/{id}',[EducationContro::class,"destroy"])->where('id','[0-9]+')->name('ed.eddestroy');
Route::get('education/create', [EducationContro::class,"create"])->name('ed.edcreate');


Route::get('education2',[EducationContro2::class,"index"]);
Route::get('education2/{id}',[EducationContro2::class,"show"])->where('id','[0-9]+')->name('ed2.ed2show');
Route::delete('education2/delete/{id}',[EducationContro2::class,"destroy"])->where('id','[0-9]+')->name('ed2.ed2destroy');
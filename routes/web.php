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
Route::get('education/{id}',[EducationContro::class,"show"])->where('id','[0-9]+')->name('ed.show');
Route::delete('education/delete/{id}',[EducationContro::class,"destroy"])->where('id','[0-9]+')->name('ed.destroy');
Route::get('education/create', [EducationContro::class,"create"])->name('ed.create');
Route::post('education/store', [EducationContro::class, 'store'])->name('ed.store');
Route::get('education/{id}/edit',[EducationContro::class,"edit"])->where('id','[0-9]+')->name('ed.edit');
Route::patch('education/update/{id}',[EducationContro::class,"update"])->where('id','[0-9]+')->name('ed.update');


Route::get('education2',[EducationContro2::class,"index"]);
Route::get('education2/{id}',[EducationContro2::class,"show"])->where('id','[0-9]+')->name('ed2.show');
Route::delete('education2/delete/{id}',[EducationContro2::class,"destroy"])->where('id','[0-9]+')->name('ed2.destroy');
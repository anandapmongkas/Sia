<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
GuruController,
SiswaController,
KelasController,
MapelController,
};


Route::get('/', function () {
    return view('layout.app');
});
Route::resource('/guru',GuruController::class); 
Route::resource('/siswa',SiswaController::class); 

Route::resource('/kelas',KelasController::class); 

Route::resource('/mapel',MapelController::class); 
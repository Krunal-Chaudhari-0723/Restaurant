<?php

use App\Http\Controllers\RestoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[RestoController::class,'index']);
Route::get('/list',[RestoController::class,'list']);
Route::post('/add',[RestoController::class,'add']);
Route::view('add','add');
Route::get('delete/{id}',[RestoController::class,'delete']);

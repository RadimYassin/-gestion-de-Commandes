<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommandeController;

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
Route::get('/',[CommandeController::class,"index"])->name("commad.index");
Route::get('/create',[CommandeController::class,"create"])->name("commad.create");
Route::post('/store',[CommandeController::class,"store"])->name("commad.store");
Route::delete('/delete/{id}',[CommandeController::class,"destroy"])->name("commad.destroy");


Route::get('/update/{id}',[CommandeController::class,"edit"])->name("commad.edite");

Route::put('/update/{id}',[CommandeController::class,"update"])->name("commad.update");

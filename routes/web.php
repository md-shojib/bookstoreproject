<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
});
Route::view('form','form');
Route::get('/',[usercontroller::class,'show']);
Route::post('form',[usercontroller::class,'addData']);
Route::get('delete/{id}',[usercontroller::class,'delete']);
Route::get('update/{id}',[usercontroller::class,'showdata']);
Route::post('update',[usercontroller::class,'update']);

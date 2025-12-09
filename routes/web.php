<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



//Route::get('/', function () {
  //  return view('welcome');
//});


Route::view("/login","login");


Route::post("/login",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);


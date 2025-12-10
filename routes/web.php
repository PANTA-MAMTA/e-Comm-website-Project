<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UserController;



//Route::get('/', function () {
  //  return view('welcome');
//});


Route::view("/login","login");
Route::get("/logout",function (){
  Session::forget('user');
  return redirect('login');
});


Route::post("/login",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);
Route::get("/detail/{id}",[ProductController::class,'detail']);
Route::get("/search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("ordernow",[ProductController::class,'orderNow']);
Route::post("ordernow",[ProductController::class,'orderNow']);

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

// Login Page
Route::get('/login', function () {
    return view('login');
});

// Logout
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

// Login Post
Route::post('/login', [UserController::class, 'login']);

// Product routes
Route::get('/', [ProductController::class, 'index']);
Route::get('/detail/{id}', [ProductController::class, 'detail']);
Route::get('/search', [ProductController::class, 'search']);

// Cart routes
Route::post('/add_to_cart', [ProductController::class, 'addToCart']);
Route::get('/cartlist', [ProductController::class, 'cartList']);
Route::get('/removecart/{id}', [ProductController::class, 'removeCart']);

// Orders
Route::get('/ordernow', [ProductController::class, 'orderNow']);
Route::post('/orderplace', [ProductController::class, 'orderPlace']);
Route::get('/myorder', [ProductController::class, 'myOrder']);

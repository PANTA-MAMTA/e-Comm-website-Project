<?php

namespace App\Http\Controllers;
use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
   
    function index()
    {
       // return Product::all();
        $data=Product::all();
        return view('product',['products'=>$data]);

    }

}

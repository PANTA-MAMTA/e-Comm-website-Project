<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    // Home page
    function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }

    // Product detail
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }

    // Search product
    function search(Request $req)
    {
        $data = Product::where('name', 'like', '%' . $req->search . '%')->get();
        return view('search', ['products' => $data]);
    }

    // Add to Session Cart  ✅ UPDATED
    function addToCart(Request $req)
    {
        if (!Session::has('user')) {
            return redirect('/login');
        }

        $product = Product::find($req->product_id);
        $cart = Session::get('cart', []);

        if (isset($cart[$req->product_id])) {
            $cart[$req->product_id]['quantity']++;
        } else {
            $cart[$req->product_id] = [
                "product_id"  => $req->product_id,
                "name"        => $product->name,
                "price"       => $product->price,
                "image"       => $product->gallery,
                "description" => $product->description,   // ✅ Added line
                "quantity"    => 1
            ];
        }

        Session::put('cart', $cart);
        return redirect('/')->with('success', 'Product added to cart');
    }

    // Cart List
    function cartList()
    {
        if (!Session::has('user')) {
            return redirect('/login');
        }

        $cart = Session::get('cart', []);
        return view('cartlist', ['products' => $cart]);
    }

    // Remove item from session cart
    function removeCart($id)
    {
        if (!Session::has('user')) {
            return redirect('/login');
        }

        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        Session::put('cart', $cart);
        return redirect('/cartlist');
    }

    // Order Now Page
    function orderNow()
    {
        if (!Session::has('user')) {
            return redirect('/login');
        }

        $cart = Session::get('cart', []);
        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('ordernow', ['total' => $total]);
    }

    // Place order
    function orderPlace(Request $req)
    {
        if (!Session::has('user')) {
            return redirect('/login');
        }

        $req->validate([
            'address' => 'required',
            'payment' => 'required'
        ]);

        $userId = Session::get('user')['id'];
        $cart = Session::get('cart', []);

        foreach ($cart as $item) {
            $order = new Order();
            $order->product_id = $item['product_id'];
            $order->user_id = $userId;
            $order->address = $req->address;
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->save();
        }

        Session::forget('cart');
        return redirect('/')->with('success', 'Order placed successfully');
    }

    // My Orders list
    function myOrder()
    {
        if (!Session::has('user')) {
            return redirect('/login');
        }

        $userId = Session::get('user')['id'];

        $orders = Order::where('user_id', $userId)
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->select('products.*', 'orders.*')
            ->get();

        return view('myorders', ['orders' => $orders]);
    }
}

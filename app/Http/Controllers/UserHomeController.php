<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{

    public function index()
    { /* need Fixing here */
        // $products = Product::latest()->take(5)->get();
        $products = Product::all();
        // foreach($products as $product)
        // {
        // $product->productImage[0]->image;
        // }
        // if($product->toArray())
        // {
        //     // dd($products);
        //     dd();
        // }
        // else{
        //     dd('data not found');
        // }
        return view('users.homepage', ['products' => $products]);
    }

}

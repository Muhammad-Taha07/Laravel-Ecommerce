<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{

    public function index()
    {
        $products = Product::latest()->take(5)->get();
        // return $products->productImage;
        // foreach($products as $product)
        // {
        // echo $product->productImage[0]->image;
        // }
        // dd($products->toArray());
        // if($products->toArray())
        // {
        //     dd('data ha ');
        // }
        // dd('nhi');
        return view('users.homepage', [
            'products' => $products
        ]);
    }

}

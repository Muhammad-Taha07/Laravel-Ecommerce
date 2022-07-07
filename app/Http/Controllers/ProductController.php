<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryValidation;
use App\Http\Requests\ProductValidation;
use Illuminate\Support\Facades\Session;


class ProductController extends Controller
{
    public function productIndex()
    {
        $data = Product::all();
        return view('admin.products.products', ['data' => $data]);
    }

    public function AddProductForm()
    {
        $dropdown = Category::all();
        return view('admin.products.products_add', ['dropdown' => $dropdown]);
    }

    public function CreateProduct(ProductValidation $request, Product $product)
    {
        $product->category_id = $request->input('category_id');
        $product->product_name = $request->input('product_name');
        $product->description = $request->input('product_description');
        $product->price = $request->input('product_price');
        $product->stock = $request->input('product_stocks');
        $product->save();
        $request->session('status')->flash('status', 'Category Added Successfully');
        return redirect('/product/viewProduct');
    }



}

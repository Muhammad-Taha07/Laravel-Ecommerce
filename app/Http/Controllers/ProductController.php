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
        $request->session('status')->flash('status', 'Product Added Successfully');
        return redirect('/product/viewProduct');
    }

    public function editProduct(Product $product)
    {
        $dropdown = Category::all();
        if($product)
        {
            return view('admin.products.products_edit', ['product' => $product, 'dropdown' => $dropdown]);
        }
    }

    public function updateProduct(Product $product, Request $request)
    {
        $product->update($request->all());
        $request->session('status')->flash('status', 'Product Updated Successfully');
        return redirect('/product/viewProduct');
    }

    public function deleteProduct(Product $product)
    {
        $product->delete();
        Session::flash('status', 'Product Deleted Successfully');
        return redirect('/product/viewProduct');
    }



}

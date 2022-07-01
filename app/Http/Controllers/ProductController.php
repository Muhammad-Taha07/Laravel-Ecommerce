<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryValidation;
use Illuminate\Support\Facades\Session;


class ProductController extends Controller
{
    public function productIndex(Category $category)
    {
        $category->all();
        return view('admin.products.products', ['category' => $category]);
    }

    public function AddProductForm()
    {
        return view('admin.products.products_add');
    }

    public function CreateProduct(ProductValidation $request, Product $product)
    {
        echo "hello";
    }

}

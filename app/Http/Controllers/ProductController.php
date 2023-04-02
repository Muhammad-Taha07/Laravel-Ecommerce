<?php

namespace App\Http\Controllers;
use App\Image;
use App\Product;
use App\Category;
use App\Brand;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\CategoryValidation;


class ProductController extends Controller
{
    public function productIndex()
    {
        $data = Product::all();
        return view('admin.products.products', ['data' => $data]);
    }

    public function AddProductForm()
    {
        $dropdown['category'] = Category::all();
        $dropdown['brand'] = Brand::all();
        return view('admin.products.products_add', ['dropdown' => $dropdown]);
    }
    /* ROUTE MODEL BINDING BEING USED HERE FOR PRODUCT */
    public function CreateProduct(ProductRequest $request, Product $product)
    {
        $createProduct['category_id']  = $request->input('category_id');
        $createProduct['product_name'] = $request->input('product_name');
        $createProduct['description']  = $request->input('description');
        $createProduct['price']        = $request->input('price');
        $createProduct['stock']        = $request->input('stock');
        $createdProduct = $product->create($createProduct);

        if($request->hasFile('product_image'))
        {
            $file = $request->file('product_image');
            $extension = $file->getClientOriginalExtension();
            $filename = "Product_image_".rand(1111, 9999).'.'.$extension;
            $file->move('uploads/product_image/', $filename);
            $photo = new Image;
            $photo->image = $filename;
            $photo->type = "Master";
            $createdProduct->images()->save($photo);
        }

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
        if($request->hasFile('product_image'))
        {
            $file = $request->file('product_image');
            if($product->productImage)
            {
                $product->productImage()->delete();
                $imageName = $product->productImage->first()->image;
                $imagePath = public_path("uploads/product_image/".$imageName);
                if(File::exists($imagePath))
                {
                    unlink("uploads/product_image/".$imageName);
                }
            }
            $extension = $file->getClientOriginalExtension();
            $filename = "image_".rand(1111, 9999).'.'.$extension;
            $file->move('uploads/product_image/', $filename);
            $photo = new Image;
            $photo->image = $filename;
            $photo->type = "Master";
            $product->images()->save($photo);
        }

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

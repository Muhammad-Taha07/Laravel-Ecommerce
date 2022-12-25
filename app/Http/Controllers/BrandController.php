<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;


class BrandController extends Controller
{
    public function index()
    {
        $data = Brand::all();
        return view('admin.brands.brand', ['brand' => $brand]);
    }

    /* CREATING BRAND FUNCTION */
    public function createBrand(BrandRequest $request)
    {
        $brand = new Brand;
        $createBrand['brand_name']        = $request->input('brand_name');
        $createBrand['brand_description'] = $request->input('brand_description');
        $createBrand = $brand->createBrandMethod($createBrand);
        
        $request->session('status')->flash('status', 'Brand Added Successfully');
        return redirect('/admin/brands/viewBrand');
    }
}

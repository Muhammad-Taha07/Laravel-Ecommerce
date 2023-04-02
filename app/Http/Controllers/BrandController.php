<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Image;
use App\Http\Requests\BrandRequest;
use Illuminate\Support\Facades\Session;


class BrandController extends Controller
{
    public function fetchBrands()
    {
        $data = Brand::all();
        return view('admin.brands.brand', ['data' => $data]);
    }

    /* ADD A NEW BRAND PAGE */
    public function addBrandView()
    {
        return view('admin.brands.brand_add');
    }

    /* CREATING BRAND FUNCTION */
    public function createBrand(BrandRequest $request)
    {
        $brand = new Brand;
        $photo = new Image;
        $createBrand['brand_name']        = $request->input('brand_name');
        $createBrand['brand_description'] = $request->input('brand_description');
        $createBrand = $brand->createBrandMethod($createBrand);

        if($request->hasFile('brand_image'))
        {
            $time             = time();
            $file             = $request->file('brand_image');
            $image_extension  = $file->getClientOriginalExtension();
            $filename         = 'Image' . '_' . $time . '.' . $image_extension;
            $photo->image     = $filename;
            $photo->type      = "Master";
            $file->move('uploads/brand_image', $filename);
            $createBrand->images()->save($photo);
        }
        else
        {
            $filename     = env('NO_IMAGE');
            $photo->image = $filename;
            $photo->type  = "Master";
            $createBrand->images()->save($photo);
        }
        $request->session('status')->flash('status', 'Brand Added Successfully');
        return redirect('/admin/brand/view');
    }

    public function deleteBrand(Brand $brand)
    {
        $brand->delete();
        Session::flash('status', 'Brand Deleted Successfully');
        return redirect('/admin/brand/view');
    }

}

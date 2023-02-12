<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Image;


class BrandController extends Controller
{
    public function fetchBrands()
    {
        $data = Brand::all();
        return view('admin.brands.brand', ['brand' => $brand]);
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
            $image_extension  = $image->getClientOriginalExtension();
            $filename         = 'Image' . '_' . $time . $image_extension;
            $imageType        = $request->type;
            $photo->image     = $filename;
            $file->move('uploads/brand_image');
            
            if($imageType == 'Master')
            {
                $photo->type = $imageType;
                $brand->images()->save($photo);
            }
        }
        $request->session('status')->flash('status', 'Brand Added Successfully');
        return redirect('/admin/brands/viewBrand');
    }

}

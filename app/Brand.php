<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    protected $fillable = ['brand_name', 'brand_description', 'created_at', 'updated_at'];

    public function createBrandMethod($data)
    {
        $createBrand = Brand::create($data);
        return $createBrand ? $createBrand :  array();
    }

    

    

}

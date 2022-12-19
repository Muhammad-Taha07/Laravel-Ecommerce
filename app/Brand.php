<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Product;

class Brand extends Model
{
    protected $table = 'brands';
    protected $fillable = ['brand_name', 'brand_description'];

    public function brands()
    {
        return $this->hasMany(Categories::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}

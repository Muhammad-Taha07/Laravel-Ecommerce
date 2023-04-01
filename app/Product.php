<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Image;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['category_id', 'product_name', 'description', 'price', 'stock', 'created_at', 'updated_at'];


    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    /* Image Modelling - Polyorphic Relationship */

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function productImage()
    {
        return $this->morphMany(Image::class, 'imageable')->where('type', 'Master');
    }
}

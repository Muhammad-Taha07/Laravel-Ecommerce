<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['category_id', 'product_name', 'description', 'price', 'stock'];


    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}

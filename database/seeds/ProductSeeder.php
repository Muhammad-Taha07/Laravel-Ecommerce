<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * All the products below are there for testing and run the seeder for
     * the first time to populate the database.
     * @return void
     */
    public function run()
    {
        $products = [
        [
        /* Clothing Category Seeders */
            'category_id'       =>      1,
            'brand_id'          =>      1,
            'product_name'      =>      'Nike Zoom Flo 6',
            'description'       =>      'Nike Shoes Zoom Series',
            'price'             =>      rand(150, 400),
            'stock'             =>      rand(95, 350)
        ],
        [
            'category_id'       =>      1,
            'brand_id'          =>      5,
            'product_name'      =>      'Levis Jeans L',
            'description'       =>      'Jeans for Men & Women Large Size',
            'price'             =>      rand(150, 8000),
            'stock'             =>      rand(50, 350)
        ],
        [
            'category_id'       =>      1,
            'brand_id'          =>      4,
            'product_name'      =>      'Gul Ahmed Kurta',
            'description'       =>      'Lawn Suits for Women by Gul Ahmed',
            'price'             =>      rand(150, 8000),
            'stock'             =>      rand(50, 350)
        ],
        [
            'category_id'       =>      1,
            'brand_id'          =>      3,
            'product_name'      =>      'N-Dure Sneakers',
            'description'       =>      'Pakistani Shoes brand N-Dure For Men & Women',
            'price'             =>      rand(1799, 5999),
            'stock'             =>      rand(50, 350)
        ],
        [
            'cateogory_id'      =>      1,
            'brand_id'          =>      2,
            'product_name'      =>      'Outfitters Shirt for Men',
            'description'       =>      'Winter denim Jacket Collection for Men',
            'price'             =>      rand(2500, 3500),
            'stock'             =>      rand(50, 350)
        ],
        /* Electronics Category Seeders */
        [
            'category_id'       =>      2,
            'brand_id'          =>      7,
            'product_name'      =>      'Samsung Galaxy S22 Ultra',
            'description'       =>      'Samsung Flagship Phone S Series',
            'price'             =>      222000,
            'stock'             =>      rand(50, 350)
        ],
        [
            'category_id'       =>      2,
            'brand_id'          =>      6,
            'product_name'      =>      'Dawlance Washing Machine',
            'description'       =>      'Twin Tub Washing machine series 9',
            'price'             =>      rand(15000, 25000),
            'stock'             =>      rand(95, 350)
        ],
        [
            'category_id'       =>      2,
            'brand_id'          =>      9,
            'product_name'      =>      'Intel Core i7 9900K',
            'description'       =>      'Intel Core i7 9th Generation Processors ',
            'price'             =>      rand(150, 5000),
            'stock'             =>      rand(95, 350)
        ],
        /* Home Decoration & Furniture Category Seeders */
        [
            'category_id'       =>      3,
            'brand_id'          =>      10,
            'product_name'      =>      'Habitt Side Table',
            'description'       =>      'Furniture for your Living Room',
            'price'             =>      rand(2500, 5000),
            'stock'             =>      rand(95, 350)
        ],
        [
            'category_id'       =>      3,
            'product_name'      =>      'Habitt Couch',
            'brand_id'          =>      10,
            'description'       =>      'Couches from Habitt for living Room & Loungue',
            'price'             =>      rand(5000, 8000),
            'stock'             =>      rand(50, 350)
        ],
        [
            'category_id'       =>      3,
            'brand_id'          =>      10,
            'product_name'      =>      'Habitt 5 Seater Sofa Set',
            'description'       =>      'Sofa Set for Home.',
            'price'             =>      rand(15000, 50000),
            'stock'             =>      rand(50, 350)
        ]];
        DB::table('products')->insert($products);
    }
}

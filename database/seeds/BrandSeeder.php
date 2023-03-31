<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands =[
        [
            'brand_name'        =>      'Nike',
            'brand_description' =>      'Nike Pakistan | T-shirts, Torso, Bottom Wears'
        ],
        [
            'brand_name'        =>      'Outfitters',
            'brand_description' =>      'Outfitters Pakistan Pvt(Ltd.)'
        ],
        [
            'brand_name'        =>      'N Dure Footwears',
            'brand_description' =>      'Best Selling Footwear in Pakistan'
        ],
        [
            'brand_name'        =>      'Gul Ahmed',
            'brand_description' =>      'Oldest Clothing Brand of Pakistan'
        ],
        [
            'brand_name'        =>      'Levis',
            'brand_description' =>      'Best Selling Bottom Wear & Denim Collections'
        ],
        [
            'brand_name'        =>      'Dawlance',
            'brand_description' =>      'Dawlance Electronics'
        ],
        [
            'brand_name'        =>      'Samsung',
            'brand_description' =>      'Samsung Electronics'
        ],
        [
            'brand_name'        =>      'Decor Pak',
            'brand_description' =>      'No.1 Home Decoration Brand in Pakistan'
        ],
        [
            'brand_name'        =>      'Intel',
            'brand_description' =>      'Intel Global WorldWide Chipsets'
        ],
        [
            'brand_name'        =>      'Habitt',
            'brand_description' =>      'Habitt Home Decor & Furniture for Workspace and Home'
        ]];
        DB::table('brands')->insert($brands);
    }
}

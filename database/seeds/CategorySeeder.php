<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
        [
            'category_name'     =>      'Electronics',
            'description'       =>      'All the Electronic related brands shall be listed in this Category.'
        ],
        [
            'category_name'     =>      'Men Clothing',
            'description'       =>      'All the Clothing Related to Male Gender shall be listed in this Category'
        ],
        [
            'category_name'     =>      'Home Decoration',
            'description'       =>      'Home Decors and Home & Office Furniture shall be listed here in this Category '
        ],
        [
            'category_name'     =>      'Women Clothing',
            'description'       =>      'Women Related Clothing, Apparels, Bottoms, Footwears and all shall be listed in this Category.'
        ]];
        DB::table('categories')->insert($categories);
    }
}

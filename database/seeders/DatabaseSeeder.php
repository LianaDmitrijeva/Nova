<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Blazers'],      //id=1
            ['name' => 'Vests'],        //id=2
            ['name' => 'Shirts'],       //id=3
            ['name' => 'Blouses'],      //id=4
            ['name' => 'Trousers'],     //id=5
            ['name' => 'Skirts'],       //id=6
            ['name' => 'Dresses'],      //id=7
            ['name' => 'Suits'],        //id=8
            ['name' => 'Tuxedos'],      //id=9
            ['name' => 'Coats'],        //id=10
            ['name' => 'Shoes'],        //id=11
            ['name' => 'Accessories'],  //id=12
        ];

        $products = [
            [
                'name' => 'Black blazer',
                'price' => 49.99,
                'sizes' => json_encode(['XS','S', 'M', 'L', 'XL']),
                'colour' => 'Black',
                'sex'=> 'Women',
                'picture' => 'product1.webp',
                'category_id' => 1,
            ],
            [
                'name' => 'Gray blazer',
                'price' => 49.99,
                'sizes' => json_encode(['XS','S', 'M', 'L', 'XL']),
                'colour' => 'Gray',
                'sex'=> 'Women',
                'picture' => 'product2.webp',
                'category_id' => 1,
            ],
            [
                'name' => 'Beige blazer',
                'price' => 49.99,
                'sizes' => json_encode(['XS','S', 'M', 'L', 'XL']),
                'colour' => 'Beige',
                'sex'=> 'Women',
                'picture' => 'product3.webp',
                'category_id' => 1,
            ],
            [
                'name' => 'Rib-knit bodycon dress',
                'price' => 39.99,
                'sizes' => json_encode(['XS','S', 'M', 'L', 'XL']),
                'colour' => 'Black',
                'sex'=> 'Women',
                'picture' => 'product5.webp',
                'category_id' => 7,
            ],
            [
                'name' => 'Crêpe slip dress',
                'price' => 20.99,
                'sizes' => json_encode(['XS','S', 'M', 'L', 'XL']),
                'colour' => 'Black',
                'sex'=> 'Women',
                'picture' => 'product4.webp',
                'category_id' => 7,
            ],
        ];
                DB::table('categories')->insert($categories);
                DB::table('products')->insert($products);
        
    }
}

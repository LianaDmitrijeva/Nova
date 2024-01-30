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
            ['name' => 'Trousers'],     //id=5 +
            ['name' => 'Skirts'],       //id=6
            ['name' => 'Dresses'],      //id=7
            ['name' => 'Suits'],        //id=8
            ['name' => 'Tuxedos'],      //id=9
            ['name' => 'Coats'],        //id=10
            ['name' => 'Shoes'],        //id=11
            ['name' => 'Accessories'],  //id=12
        ];

        /////////////////// Trausers ///////////////////
        $products = [
            [
                'name' => 'Cargo Joggers',
                'price' => 35.99,
                'sizes' => json_encode(['XS','S', 'M', 'L', 'XL']),
                'colour' => 'Black',
                'sex'=> 'Men',
                'picture' => 'men1.webp',
                'category_id' => 5,
            ],
            [
                'name' => 'Cargo Joggers',
                'price' => 35.99,
                'sizes' => json_encode(['XS','S', 'M', 'L', 'XL']),
                'colour' => 'Khaki green',
                'sex'=> 'Men',
                'picture' => 'men2.webp',
                'category_id' => 5,
            ],
            [
                'name' => 'Cargo Joggers',
                'price' => 35.99,
                'sizes' => json_encode(['XS','S', 'M', 'L', 'XL']),
                'colour' => 'Dark grey',
                'sex'=> 'Men',
                'picture' => 'men3.webp',
                'category_id' => 5,
            ],
            [
                'name' => 'Cargo Joggers',
                'price' => 35.99,
                'sizes' => json_encode(['XS','S', 'M', 'L', 'XL']),
                'colour' => 'Beige',
                'sex'=> 'Men',
                'picture' => 'men4.webp',
                'category_id' => 5,
            ],
            [
                'name' => 'Slim Fit Trousers',
                'price' => 25.99,
                'sizes' => json_encode(['XS','S', 'M', 'L', 'XL']),
                'colour' => 'Black',
                'sex'=> 'Men',
                'picture' => 'men5.webp',
                'category_id' => 5,
            ],
            [
                'name' => 'Slim Fit Trousers',
                'price' => 25.99,
                'sizes' => json_encode(['XS','S', 'M', 'L', 'XL']),
                'colour' => 'Khaki green',
                'sex'=> 'Men',
                'picture' => 'men6.webp',
                'category_id' => 5,
            ],
            [
                'name' => 'Mom Loose Fit Trousers',
                'price' => 29.99,
                'sizes' => json_encode(['XS','S', 'M', 'L', 'XL']),
                'colour' => 'Black',
                'sex'=> 'Women',
                'picture' => 'women1.webp',
                'category_id' => 5,
            ],
            [
                'name' => 'Mom Loose Fit Trousers',
                'price' => 29.99,
                'sizes' => json_encode(['XS','S', 'M', 'L', 'XL']),
                'colour' => 'Beige',
                'sex'=> 'Women',
                'picture' => 'women2.webp',
                'category_id' => 5,
            ],
            [
                'name' => 'Mom Loose Fit Trousers',
                'price' => 29.99,
                'sizes' => json_encode(['XS','S', 'M', 'L', 'XL']),
                'colour' => 'Dark khaki green',
                'sex'=> 'Women',
                'picture' => 'women3.webp',
                'category_id' => 5,
            ],
            [
                'name' => 'Flared Twill Trousers',
                'price' => 17.99,
                'sizes' => json_encode(['XS','S', 'M', 'L', 'XL']),
                'colour' => 'Dark grey',
                'sex'=> 'Women',
                'picture' => 'women4.webp',
                'category_id' => 5,
            ],
            [
                'name' => 'Flared Twill Trousers',
                'price' => 17.99,
                'sizes' => json_encode(['XS','S', 'M', 'L', 'XL']),
                'colour' => 'White',
                'sex'=> 'Women',
                'picture' => 'women5.webp',
                'category_id' => 5,
            ],
            [
                'name' => 'Flared Twill Trousers',
                'price' => 17.99,
                'sizes' => json_encode(['XS','S', 'M', 'L', 'XL']),
                'colour' => 'Light beige',
                'sex'=> 'Women',
                'picture' => 'women6.webp',
                'category_id' => 5,
            ]
        ];
        
        DB::table('categories')->insert($categories);
        DB::table('products')->insert($products);
        
    }
}

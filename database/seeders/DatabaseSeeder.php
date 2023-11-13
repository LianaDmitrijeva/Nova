<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Blazers'],
            ['name' => 'Vests'],
            ['name' => 'Shirts'],
            ['name' => 'Blouses'],
            ['name' => 'Trousers'],
            ['name' => 'Skirts'],
            ['name' => 'Dresses'],
            ['name' => 'Suits'],
            ['name' => 'Tuxedos'],
            ['name' => 'Coats'],
            ['name' => 'Shoes'],
            ['name' => 'Accessories'],
        ];

        $products = [
            [
                'name' => 'Black blazer',
                'price' => 49.99,
                'sizes' => json_encode(['XS','S', 'M', 'L', 'XL']),
                'colour' => 'Black',
                'picture' => 'product1.webp',
                'category_id' => 1,
            ],
            [
                'name' => 'Gray blazer',
                'price' => 49.99,
                'sizes' => json_encode(['XS','S', 'M', 'L', 'XL']),
                'colour' => 'Gray',
                'picture' => 'product2.webp',
                'category_id' => 1,
            ],
        ];
                // Insert data into the categories table
                DB::table('categories')->insert($categories);

                // Insert data into the products table
                DB::table('products')->insert($products);
        
    }
}

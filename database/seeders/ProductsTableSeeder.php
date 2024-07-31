<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        $products = [
            [
                'name' => 'Men T-Shirt',
                'description' => 'Comfortable cotton t-shirt',
                'price' => 19.99,
                'category_id' => 1,
                'photo' => 'storage/products/test.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Women Dress',
                'description' => 'Stylish summer dress',
                'price' => 49.99,
                'category_id' => 2,
                'photo' => 'storage/products/test.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Kids Jacket',
                'description' => 'Warm winter jacket',
                'price' => 29.99,
                'category_id' => 3,
                'photo' => 'storage/products/test.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Sunglasses',
                'description' => 'UV protection sunglasses',
                'price' => 9.99,
                'category_id' => 4,
                'photo' => 'storage/products/test.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Running Shoes',
                'description' => 'Lightweight running shoes',
                'price' => 59.99,
                'category_id' => 5,
                'photo' => 'storage/products/test.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Sports T-Shirt',
                'description' => 'Breathable sports t-shirt',
                'price' => 24.99,
                'category_id' => 6,
                'photo' => 'storage/products/test.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Leather Jacket',
                'description' => 'Genuine leather jacket',
                'price' => 89.99,
                'category_id' => 7,
                'photo' => 'storage/products/test.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Underwear Set',
                'description' => 'Comfortable underwear set',
                'price' => 14.99,
                'category_id' => 8,
                'photo' => 'storage/products/test.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Men Jeans',
                'description' => 'Stylish denim jeans',
                'price' => 39.99,
                'category_id' => 1,
                'photo' => 'storage/products/test.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Women Blouse',
                'description' => 'Elegant silk blouse',
                'price' => 34.99,
                'category_id' => 2,
                'photo' => 'storage/products/test.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];

        DB::table('products')->insert($products);
    }
}

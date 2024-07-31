<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        $categories = [
            ['name' => 'Men Category', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Women Category', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kids Category', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Accessories', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shoes', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sportswear', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Outerwear', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Underwear', 'created_at' => $now, 'updated_at' => $now],
        ];

        DB::table('categories')->insert($categories);
    }
}

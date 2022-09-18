<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateString();
        $categories = [
            [
                'name' => 'Shirts', 'slug' => 'shirts', 'created_at' => $now, 'updated_at' => $now,
            ],
            [
                'name' => 'Trousers', 'slug' => 'trousers', 'created_at' => $now, 'updated_at' => $now,
            ],
            [
                'name' => 'Jean', 'slug' => 'jean', 'created_at' => $now, 'updated_at' => $now,
            ],
            [
                'name' => 'SweatTshirt', 'slug' => 'sweattshirt', 'created_at' => $now, 'updated_at' => $now,
            ],
            [
                'name' => 'Shoes & Sneakers', 'slug' => 'shoes & sneakers', 'created_at' => $now, 'updated_at' => $now,
            ],
            [
                'name' => 'Accessories', 'slug' => 'accessories', 'created_at' => $now, 'updated_at' => $now,
            ],
        ];
        Category::insert($categories);
    }
}

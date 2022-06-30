<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

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
                'name' => 'Shirts',
            ],
            [
                'name' => 'Jeans',
            ],
            [
                'name' => 'Long Sleeves',
            ],
            [
                'name' => 'Shoes',
            ],
        ];
        Category::insert($categories);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // T-shirts
        for ($i = 1; $i < 20; $i++) {
            Product::create([
                'category_id' => 1,
                'name' => 'T-shirt ' . $i,
                'slug' => 't-shirt ' . $i,
                'price' => rand(2000, 4000),
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, quas?',
                'size' => ['S', 'M', 'L', 'XL'],
                'quantity' => rand(10, 15),
                'image' => 'img/f1.jpg',
            ]);
        }
        // Shoes & Categories
        for ($i = 1; $i < 20; $i++) {
            Product::create([
                'category_id' => 5,
                'name' => 'Shoe  ' . $i,
                'slug' => 'shoe ' . $i,
                'price' => rand(2000, 4000),
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, quas?',
                'size' => ['S', 'M', 'L', 'XL'],
                'quantity' => rand(10, 15),
                'image' => 'img/shoe1.jpg',
            ]);
        }
        // Trousers
        for ($i = 1; $i < 20; $i++) {
            Product::create([
                'category_id' => 2,
                'name' => 'Trouser ' . $i,
                'slug' => 'trouser ' . $i,
                'price' => rand(2000, 4000),
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, quas?',
                'size' => ['S', 'M', 'L', 'XL'],
                'quantity' => rand(10, 15),
                'image' => 'img/f7.jpg',
            ]);
        }
        // Jeans
        for ($i = 1; $i < 20; $i++) {
            Product::create([
                'category_id' => 3,
                'name' => 'Jean ' . $i,
                'slug' => 'jean ' . $i,
                'price' => rand(2000, 4000),
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, quas?',
                'size' => ['S', 'M', 'L', 'XL'],
                'quantity' => rand(10, 15),
                'image' => 'img/jacket2.jpg',
            ]);
        }
    }
}

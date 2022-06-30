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
        $products = [
            [
                'name' => 'Adidas',
                'description' => 'T-Shirt',
                'price_ht' => 29.99,
                'image' => 'img/f1.jpg',
                'category_id' => 1,
                'size' => json_encode(['S', 'M', 'L', 'XL']),
                'quantity' => 5
            ],
            [
                'name' => 'Adidas',
                'description' => 'T-Shirt',
                'price_ht' => 39.99,
                'image' => 'img/f2.jpg',
                'category_id' => 2,
                'size' => json_encode(['S', 'M', 'L', 'XL']),
                'quantity' => 3
            ],
            [
                'name' => 'Adidas',
                'description' => 'T-Shirt',
                'price_ht' => 49.99,
                'image' => 'img/f3.jpg',
                'category_id' => 1,
                'size' => json_encode(['S', 'M', 'L', 'XL']),
                'quantity' => 5
            ],
            [
                'name' => 'Adidas',
                'description' => 'T-Shirt',
                'price_ht' => 59.99,
                'image' => 'img/f4.jpg',
                'category_id' => 2,
                'size' => json_encode(['S', 'M', 'L']),
                'quantity' => 5
            ],
            [
                'name' => 'Nike',
                'description' => 'T-Shirt',
                'price_ht' => 69.99,
                'image' => 'img/f5.jpg',
                'category_id' => 3,
                'size' => json_encode(['S', 'M', 'L', 'XL']),
                'quantity' => 5
            ],
            [
                'name' => 'Nike',
                'description' => 'T-Shirt',
                'price_ht' => 79.99,
                'image' => 'img/f6.jpg',
                'category_id' => 3,
                'size' => json_encode(['M', 'L', 'XL']),
                'quantity' => 5
            ],
            [
                'name' => 'Nike',
                'description' => 'Long sleeves',
                'price_ht' => 19.99,
                'image' => 'img/f7.jpg',
                'category_id' => 4,
                'size' => json_encode(['M', 'L', 'XL']),
                'quantity' => 5
            ],
            [
                'name' => 'Nike',
                'description' => 'Long sleeves',
                'price_ht' => 39.99,
                'image' => 'img/f8.jpg',
                'category_id' => 4,
                'size' => json_encode(['M', 'L', 'XL']),
                'quantity' => 5
            ],
            [
                'name' => 'Adidas',
                'description' => 'T-Shirt',
                'price_ht' => 29.99,
                'image' => 'img/f1.jpg',
                'category_id' => 2,
                'size' => json_encode(['M', 'L', 'XL']),
                'quantity' => 5
            ],
            [
                'name' => 'Adidas',
                'description' => 'T-Shirt',
                'price_ht' => 39.99,
                'image' => 'img/f2.jpg',
                'category_id' => 2,
                'size' => json_encode(['M', 'L', 'XL']),
                'quantity' => 5
            ],
            [
                'name' => 'Adidas',
                'description' => 'T-Shirt',
                'price_ht' => 49.99,
                'image' => 'img/f3.jpg',
                'category_id' => 1,
                'size' => json_encode(['M', 'L', 'XL']),
                'quantity' => 5
            ],
            [
                'name' => 'Adidas',
                'description' => 'T-Shirt',
                'price_ht' => 59.99,
                'image' => 'img/f4.jpg',
                'category_id' => 1,
                'size' => json_encode(['XS', 'M', 'L', 'XL']),
                'quantity' => 4
            ],
        ];

        Product::insert($products);
    }
}

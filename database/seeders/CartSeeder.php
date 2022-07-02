<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carts = [
            [
                'qty' => 0.00,
                'product_id' => 13,
                'user_id' => 1
            ],
            [
                'qty' => 10.00,
                'product_id' => 14,
                'user_id' => 1
            ],
            [
                'qty' => 0.00,
                'product_id' => 15,
                'user_id' => 1
            ],
        ];
        Cart::insert($carts);
    }
}

<?php

namespace Database\Seeders;

use CartProduct;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cart_product')->insert([
            [
                'product_id' => 13,
                'cart_id' => 1
            ],
            [
                'product_id' => 14,
                'cart_id' => 1
            ]
        ]);
    }
}

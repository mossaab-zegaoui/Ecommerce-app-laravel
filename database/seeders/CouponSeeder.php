<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coupons = [
            [
                'code' => 'AB12',
                'type' => 'fixed',
                'value' => 900,
                'percent_off' => 0,
            ],
            [
                'code' => 'CD34',
                'type' => 'percent',
                'value ' => 0,
                'percent_off' => 20,
            ],
        ];
        Coupon::insert($coupons);
    }
}

<?php

namespace Database\Factories;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{

    protected $model = \App\Models\Product::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' =>$this->faker->unique()->numberBetween(1,8),
            'name' => $this->faker->name(),
            'price_ht' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 1000),
            'description' => $this->faker->text(30),
            'image' => $this->faker->imageUrl($width = 640, $height = 480)
        ];
    }
}

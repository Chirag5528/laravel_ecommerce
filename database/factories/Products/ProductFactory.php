<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name;
        return [
            'name' => $name,
            'slug' => Str::slug( $name ),
            'product_category_id' => $this->faker->numberBetween(0,10),
            'product_sub_category_id' => $this->faker->numberBetween(0,10),
            'quantity' => $this->faker->numberBetween(0,10)
        ];
    }
}

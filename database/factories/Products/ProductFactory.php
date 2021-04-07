<?php

namespace Database\Factories\Products;

use App\Models\Products\Product;
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
        $name = $this->faker->word();
        return [
            'name' => $name,
            'slug' => strtolower($name),
            'product_category_id' => $this->faker->numberBetween(1, 10),
            'product_sub_category_id' => $this->faker->numberBetween(1, 10),
            'quantity' => $this->faker->numberBetween(1, 10)
        ];
    }
}

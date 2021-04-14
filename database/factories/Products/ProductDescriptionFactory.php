<?php

namespace Database\Factories\Products;

use App\Models\Products\ProductDescription;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductDescriptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductDescription::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'short_description' => $this->faker->sentence(2),
            'description' => $this->faker->sentence(10),
            'product_id' => $this->faker->numberBetween(2, 10)
        ];
    }
}

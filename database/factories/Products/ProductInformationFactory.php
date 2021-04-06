<?php

namespace Database\Factories\Products;

use App\Models\Products\ProductInformation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductInformationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductInformation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand' => array_rand(config('app.brands')),
            'length' => $this->faker->numberBetween(1, 100),
            'breadth' => $this->faker->numberBetween(1, 100),
            'height' => $this->faker->numberBetween(1, 100),
            // 'product_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}

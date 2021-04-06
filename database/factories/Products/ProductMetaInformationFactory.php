<?php

namespace Database\Factories\Products;

use App\Models\Products\ProductMetaInformation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductMetaInformationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductMetaInformation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'keywords' => $this->faker->unique()->words(3),
            'description' => $this->faker->sentence(3),
            'product_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}

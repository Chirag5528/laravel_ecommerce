<?php

namespace Database\Factories\Products;

use App\Models\Products\ProductPrice;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductPriceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductPrice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $number = $this->faker->numberBetween(1, 10);

        return [
            'price' => $number * 15,
            'cost' => $number * 12,
            'special_price' => $number * 10,
            'special_price_from' => $this->faker->dateTimeBetween('- 15 days'),
            'special_price_to' => $this->faker->dateTimeBetween('now',"+15 days"),
            'product_id' => $number,
        ];
    }
}

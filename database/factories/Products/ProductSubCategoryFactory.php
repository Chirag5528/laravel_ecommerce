<?php

namespace Database\Factories\Products;

use App\Models\Model;
use App\Models\Products\ProductSubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductSubCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductSubCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'status' => 1,
            'category_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}

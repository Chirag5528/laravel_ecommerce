<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(10)->create();
        \App\Models\Products\Product::factory()->count(100)->create();
        \App\Models\Products\ProductCategory::factory()->count(100)->create();
        \App\Models\Products\ProductSubCategory::factory()->count(100)->create();
        \App\Models\Products\ProductDescription::factory()->count(100)->create();
        \App\Models\Products\ProductInformation::factory()->count(100)->create();
        \App\Models\Products\ProductMetaInformation::factory()->count(100)->create();
        \App\Models\Products\ProductPrice::factory()->count(100)->create();
    }
}

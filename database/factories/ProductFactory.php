<?php

namespace Database\Factories;

use App\Enums\ProductUnit;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categories = Category::all();
        $productUnits = ProductUnit::cases();
        return [
            'category_id' => $categories->random(),
            'name' => $this->faker->name(),
            'unit' => $productUnits[array_rand($productUnits)],
            'rate' => $this->faker->numberBetween(100, 1000),
            'description' => $this->faker->paragraph(),
        ];
    }
}

<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Product>
 */
final class ProductFactory extends Factory
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
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'picture' => fake()->text,
            'description' => fake()->text,
            'quantity' => fake()->randomNumber(),
            'category_id' => \App\Models\Category::factory(),
            'provider_id' => \App\Models\Provider::factory(),
        ];
    }
}

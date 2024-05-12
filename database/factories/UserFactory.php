<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\User>
 */
final class UserFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = User::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'email' => fake()->safeEmail,
            'role' => fake()->word,
            'email_verified_at' => fake()->optional()->datetime(),
            'password' => bcrypt(fake()->password),
            'remember_token' => Str::random(10),
            'theme' => fake()->optional()->word,
            'theme_color' => fake()->optional()->word,
            'avatar_url' => fake()->optional()->word,
        ];
    }
}

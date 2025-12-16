<?php

namespace Database\Factories;

use App\Models\Categories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articles>
 */
class ArticlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4, false),
            'author_id' => User::factory(),
            'slug' => Str::slug(fake()->sentence()),
            'isi' => fake()->text(),
            "category_id" => Categories::inRandomOrder()->value("id")
        ];
    }
}

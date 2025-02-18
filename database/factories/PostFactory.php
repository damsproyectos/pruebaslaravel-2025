<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->name();
        return [
            'title' => $name,
            'slug' => str($name)->slug(),
            // 'description' => $this->faker->paragraph(2),
            'description' => $this->faker->paragraph(0),
            // 'content' => $this->faker->paragraph(2),
            'content' => $this->faker->paragraph(0),
            'image' => $this->faker->imageUrl(),
            'posted' => $this->faker->randomElement(['yes','not']),
            'category_id' => $this->faker->randomElement([1,2,3]),
            'user_id' => $this->faker->randomElement([1,2,3]),
        ];
    }
}

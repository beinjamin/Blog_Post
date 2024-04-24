<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
        $title = $this->faker->sentence();
        return [
           /*  'title'=>$this->faker->sentence(),
            'slug'=>$this->faker->slug(),
            'excerpt'=>$this->faker->sentence(),
            'content'=>$this->faker->paragraph(),
            'thumbnail'=>$this->faker->imageUrl() */
            'title' => $title,
            'slug' => Str::slug($title),


        ];
    }
}

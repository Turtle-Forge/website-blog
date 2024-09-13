<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence(mt_rand(2, 5)),
            "slug" => $this->faker->sentence(mt_rand(2, 7)),
            "excerpt" => $this->faker->sentence(mt_rand(15, 25)),
            "body" => $this->faker->paragraph(mt_rand(3, 7)),
            "category_id" => mt_rand(1, 3),
            "user_id" => mt_rand(1, 5)
        ];
    }
}

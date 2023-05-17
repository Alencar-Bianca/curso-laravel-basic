<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
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
    public function definition(): array
    {
        $name = Str::random(10);
        $price = number_format(rand(1, 10000) / 100, 2);
        $slug = Str::slug($name, '-');
        $image = 'https://via.placeholder.com/350x150';

        return [
            'name' => $name,
            'description' => $this->faker->text(),
            'price' => number_format(rand(1, 10000) / 100, 2),
            'slug' => $slug,
            'user_id' => 1,
            'category_id' => 1,
            'image' => 'https://via.placeholder.com/350x150'
        ];
    }
}

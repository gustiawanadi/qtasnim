<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //    
            'nama_barang' => $this->faker->word(),
            'category_id' => $this->faker->randomElement(['1', '2']),
            'stok' => $this->faker->numberBetween(0, 100),
        ];
    }
}

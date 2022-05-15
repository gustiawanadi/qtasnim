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
            'jenis_barang' => $this->faker->randomElement(['konsumsi', 'pembersih']),
            'stok' => $this->faker->numberBetween(0, 100),
        ];
    }
}

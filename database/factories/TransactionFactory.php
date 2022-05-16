<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'item_id' => $this->faker->numberBetween(1,25),
            'jumlah_terjual' => $this->faker->numberBetween(0, 50),
            'tgl_transaksi' => $this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}

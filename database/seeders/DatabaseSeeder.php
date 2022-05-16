<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
            
        \App\Models\Category::factory()->create([
            'jenis_barang' => 'konsumsi'
        ]);
        \App\Models\Category::factory()->create([
            'jenis_barang' => 'pembersih'
        ]);

        \App\Models\Item::factory(10)->create();
        \App\Models\Item::factory()->create([
            'nama_barang' => 'Kopi',
            'jenis_barang' => 'konsumsi',
            'stok' => 100
        ]);
    }
}

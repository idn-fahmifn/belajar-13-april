<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'name' => 'Laptop',
            'brand' => 'Macbook', 
            'stock' => 10,
            'tersedia' => true,
            'desc' => 'Harga murah tahun 2023',
        ]);
    }
}

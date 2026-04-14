<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $merk = ['Macbook', 'Asus', 'Lenovo', 'Dell'];

        return [
            'name' => fake()->randomElement(['Laptop Ngoding', 'Laptop Kantor', 'Laptop Gaming']),
            'brand' => fake()->randomElement($merk), 
            'stock' => random_int(1, 100),
            'tersedia' => fake()->boolean(),
            'desc' => 'laptop dengan ' . fake()->randomElement(['Harga Murah', 'Harga Terjangkau', 'Spesifikasi Tinggi'])
             . 'Tahun Rilis' . fake()->year(),
        ];
    }
}

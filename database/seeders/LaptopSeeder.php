<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Laptop;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Laptop::create([
            'brand' => 'Lenovo',
            'model' => 'Ideapad Slim 3',
            'processor' => 'Intel Core i7',
            'ram' => 16,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use PhpParser\Node\Stmt\Foreach_;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker  = Faker::create();
        foreach (range(1, 10) as $index) {
            Product::create([
                'name' => $faker->name,
                'description' => $faker->text,
                'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
                'quantity' => $faker->numberBetween($min = 1, $max = 100),
            ]);
        }


    }
}

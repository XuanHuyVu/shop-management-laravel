<?php

namespace Database\Seeders;

use App\Models\Detail;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $orders = Order::all() -> pluck('id') -> toArray();
        $products = Product::all() -> pluck('id') -> toArray();

        foreach (range(1, 10) as $index) {
            Detail::create([
                'order_id' => $faker->randomElement($orders),
                'product_id' => $faker->randomElement($products),
                'quantity' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            ]);
        }
    }
}

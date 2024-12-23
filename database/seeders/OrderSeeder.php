<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $customer_id = Customer::all() -> pluck('id') -> toArray();
        foreach (range(1, 10) as $index) {
            Order::create([
                'customer_id' => $faker->randomElement($customer_id),
                'order_date' => $faker->date(),
                'status' => $faker->randomElement(['pending','processing', 'completed', 'cancelled']),
            ]);
        }
    }
}

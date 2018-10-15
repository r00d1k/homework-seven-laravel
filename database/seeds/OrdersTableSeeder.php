<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\User::get();

        factory(\App\Order::class, 5)->create([
            'user_id' => $users->random()->id,

            'order_number' => rand(0,16),
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'status' => 'ACTIVE',
            'name' => 'John Smith',
            'email' => 'john.smith@example.com',
            'id' => 1001,
            'phone' => '555-1234',
            'total_price' => 19.99,
            'notes' => 'Please deliver to the side door.'
        ]);

        Order::create([
            'status' => 'ACTIVE',
            'name' => 'Jane Doe',
            'email' => 'jane.doe@example.com',
            'id' => 1002,
            'phone' => '555-5678',
            'total_price' => 34.50,
            'notes' => 'Do not bend the package.'
        ]);

        Order::create([
            'status' => 'ACTIVE',
            'name' => 'Bob Johnson',
            'email' => 'bob.johnson@example.com',
            'id' => 1003,
            'phone' => '555-2468',
            'total_price' => 49.99,
            'notes' => 'Leave the package on the front porch.'
        ]);

        Order::create([
            'status' => 'ACTIVE',
            'name' => 'Amy Chen',
            'email' => 'amy.chen@example.com',
            'id' => 1004,
            'phone' => '555-1357',
            'total_price' => 12.99,
            'notes' => 'Call me when you arrive.'
        ]);

        Order::create([
            'status' => 'ACTIVE',
            'name' => 'David Lee',
            'email' => 'david.lee@example.com',
            'id' => 1005,
            'phone' => '555-3698',
            'total_price' => 27.50,
            'notes' => 'Please include a gift message.'
        ]);

        Order::create([
            'status' => 'ACTIVE',
            'name' => 'Emily Jones',
            'email' => 'emily.jones@example.com',
            'id' => 1006,
            'phone' => '555-9876',
            'total_price' => 69.99,
            'notes' => 'Signature required upon delivery.'
        ]);

        Order::create([
            'status' => 'ACTIVE',
            'name' => 'Michael Nguyen',
            'email' => 'michael.nguyen@example.com',
            'id' => 1007,
            'phone' => '555-4567',
            'total_price' => 9.99,
            'notes' => 'Please do not ring the doorbell.'
        ]);

        Order::create([
            'status' => 'ACTIVE',
            'name' => 'Sarah Kim',
            'email' => 'sarah.kim@example.com',
            'id' => 1008,
            'phone' => '555-7890',
            'total_price' => 42.50,
            'notes' => 'Delivery instructions: leave at back gate.'
        ]);

        Order::create([
            'status' => 'ACTIVE',
            'name' => 'Tom Johnson',
            'email' => 'tom.johnson@example.com',
            'id' => 1009,
            'phone' => '555-2345',
            'total_price' => 29.99,
            'notes' => 'Please deliver to the apartment office.'
        ]);
    }
}

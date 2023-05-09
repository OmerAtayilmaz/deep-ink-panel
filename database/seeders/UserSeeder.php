<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@deepink.com',
            'password' => Hash::make('987654321'),
            'role' => "ADMIN"
        ]);

        User::create([
            'name' => 'Officer',
            'email' =>'user@deepink.com',
            'password' => Hash::make('123456789'),
            'role' => "OFFICER"
        ]);

    }
}

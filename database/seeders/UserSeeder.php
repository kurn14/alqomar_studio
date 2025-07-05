<?php

namespace Database\Seeders;

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

        // Clear existing users
        \App\Models\User::truncate();


        $data = [
            [
                'name' => 'Adi',
                'email' => 'adi@alqomar.com',
                'password' => bcrypt('12')
            ],
            [
                'name' => 'Kurnia',
                'email' => 'kurnia@alqomar.com',
                'password' => bcrypt('12')
            ],
        ];

        foreach ($data as $user) {
            \App\Models\User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
            ]);
        }
    }
}

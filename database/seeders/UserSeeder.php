<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'is_active' => true,
            ]
        );

        // Some demo users
        $names = ['Alice Johnson','Bob Lee','Charlie Kim','Diana Patel','Ethan Wong'];
        foreach ($names as $i => $name) {
            $email = strtolower(str_replace(' ', '.', $name)).'@example.com';
            User::updateOrCreate(
                ['email' => $email],
                [
                    'name' => $name,
                    'password' => Hash::make('password'),
                    'role' => 'user',
                    'is_active' => true,
                ]
            );
        }
    }
}

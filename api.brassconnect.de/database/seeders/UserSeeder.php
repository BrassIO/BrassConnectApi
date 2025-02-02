<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Admin-User erstellen
         User::create([
            'name' => 'Admin',
            'email' => 'admin@brassconnect.de',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Normaler User
        User::create([
            'name' => 'Test User',
            'email' => 'user@brassconnect.de',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role_id' => 1, // ID của role 'Admin'
                'phoneNumber' => '123456789',
                'address' => '123 Admin Street',
                'dateOfBirth' => '1990-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Editor User',
                'email' => 'editor@example.com',
                'password' => Hash::make('password'),
                'role_id' => 2, // ID của role 'Editor'
                'phoneNumber' => '987654321',
                'address' => '456 Editor Lane',
                'dateOfBirth' => '1992-02-02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

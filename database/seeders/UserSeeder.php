<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Matheus Santos',
                'username' => 'msantos',
                'email' => 'msantos@example.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Vendedor vendor',
                'username' => 'vendor',
                'email' => 'vendor@example.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Cliente',
                'username' => 'user',
                'email' => 'user@example.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('12345678'),
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // Admin
            [
                'name' => 'Admin',
                'email' => 'admin@email.com',
                'password' => Hash::make('12345678'),
                'role' => 'Admin',
            ],
            // Employee
            [
                'name' => 'Employee',
                'email' => 'employee@email.com',
                'password' => Hash::make('12345678'),
                'role' => 'Employee',
            ],
            // User
            [
                'name' => 'User',
                'email' => 'user@email.com',
                'password' => Hash::make('12345678'),
                'role' => 'User',
            ]
        ]);
    }
}

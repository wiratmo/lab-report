<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'class' => 'Admin',
                'email' => 'admin@rpl.com',
                'email_verified_at' => now(),
                'password' => Hash::make('adminpassword'), // Ubah sesuai kebutuhan
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class' => 'XI RPL A',
                'email' => '11ra@rpl.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123'), // Ubah sesuai kebutuhan
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class' => 'XI RPL B',
                'email' => '11rb@rpl.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123'), // Ubah sesuai kebutuhan
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class' => 'XI RPL C',
                'email' => '11rc@rpl.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123'), // Ubah sesuai kebutuhan
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class' => 'X RPL A',
                'email' => '10ra@rpl.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123'), // Ubah sesuai kebutuhan
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class' => 'X RPL B',
                'email' => '10rb@rpl.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123'), // Ubah sesuai kebutuhan
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class' => 'X RPL C',
                'email' => '10rc@rpl.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123'), // Ubah sesuai kebutuhan
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

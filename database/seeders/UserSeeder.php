<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // User 1
        DB::table('users')->insert([
            'name' => 'Mayar Alababneh',
            'email' => 'mayar@gmail.com',
            'password' => Hash::make('Mayar@123'),
            'image' => 'default_image.jpg', 
            'mobileNum' => '0798750428',
            'location' => 'irbid',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // User 2
        DB::table('users')->insert([
            'name' => 'Razan Alrjoub',
            'email' => 'razan@gmail.com',
            'password' => Hash::make('Razan@123'),
            'image' => 'default_image.jpg', 
            'mobileNum' => '0798750429',
            'location' => 'irbid',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

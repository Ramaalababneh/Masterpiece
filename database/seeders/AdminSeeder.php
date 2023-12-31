<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Rama Alababneh',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Admin@123'),
            'image' => 'http://127.0.0.1:8000/assets/img/1701630098.jpg', // You can change this to the default image path
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

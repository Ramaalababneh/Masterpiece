<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::truncate();
        Category::create([
            'name' => 'Shirts',
            'description' => 'Our shirts are crafted from 100% cotton, providing a soft and comfortable feel against the skin.',
            'image' => 'http://127.0.0.1:8000/assets/img/1698269869.jpg',
        ]);
        Category::create([
            'name' => 'Hoddies',
            'description' => 'Our Hoodies are crafted from 100% cotton, providing a soft and comfortable feel against the skin.',
            'image' => 'http://127.0.0.1:8000/assets/img/1698584283.png',
        ]);
        Category::create([
            'name' => 'Scrubs',
            'description' => 'Our Scrubs are crafted from 100% cotton, providing a soft and comfortable feel against the skin.',
            'image' => 'http://127.0.0.1:8000/assets/img/1698584331.png',
        ]);
        Category::create([
            'name' => 'Labcoats',
            'description' => 'Our Labcoats are crafted from 100% cotton, providing a soft and comfortable feel against the skin.',
            'image' => 'http://127.0.0.1:8000/assets/img/1698584363.jpg',
        ]);
    }
}

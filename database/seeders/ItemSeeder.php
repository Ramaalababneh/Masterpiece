<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
public function run()
    {
        $items = [
            [
                'name' => 'Black Shirt',
                'image' => 'http://127.0.0.1:8000/assets/img/1698591035.png',
                'description' => 'Our shirts are crafted from 100% cotton, providing a soft and comfortable feel against the skin. Additionally, they come in a free size that can suit a wide range of weights, ensuring a comfortable fit for everyone.',
                'price' => '20',
                'stock_quantity' => 100,
                'size' => 'free size',
                'category_id' => 1, 
            ],
            [
                'name' => 'White Shirt',
                'image' => 'http://127.0.0.1:8000/assets/img/1698692209.png',
                'description' => 'Our shirts are crafted from 100% cotton, providing a soft and comfortable feel against the skin. Additionally, they come in a free size that can suit a wide range of weights, ensuring a comfortable fit for everyone.',
                'price' => '20',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 1, 
            ],
            [
                'name' => 'Grey Shirt',
                'image' => 'http://127.0.0.1:8000/assets/img/1698692411.png',
                'description' => 'Our shirts are crafted from 100% cotton, providing a soft and comfortable feel against the skin. Additionally, they come in a free size that can suit a wide range of weights, ensuring a comfortable fit for everyone.',
                'price' => '20',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 1, 
            ],
            [
                'name' => 'Blue Shirt',
                'image' => 'http://127.0.0.1:8000/assets/img/1698591213.png',
                'description' => 'Our shirts are crafted from 100% cotton, providing a soft and comfortable feel against the skin. Additionally, they come in a free size that can suit a wide range of weights, ensuring a comfortable fit for everyone.',
                'price' => '20',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 1, 
            ],
            [
                'name' => 'Navey Shirt',
                'image' => 'http://127.0.0.1:8000/assets/img/1698692739.png',
                'description' => 'Our shirts are crafted from 100% cotton, providing a soft and comfortable feel against the skin. Additionally, they come in a free size that can suit a wide range of weights, ensuring a comfortable fit for everyone.',
                'price' => '20',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 1, 
            ],
            [
                'name' => 'Yellow Shirt',
                'image' => 'http://127.0.0.1:8000/assets/img/1698591174.png',
                'description' => 'Our shirts are crafted from 100% cotton, providing a soft and comfortable feel against the skin. Additionally, they come in a free size that can suit a wide range of weights, ensuring a comfortable fit for everyone.',
                'price' => '20',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 1, 
            ],

            [
                'name' => 'Bage Shirt',
                'image' => 'http://127.0.0.1:8000/assets/img/1698692705.png',
                'description' => 'Our shirts are crafted from 100% cotton, providing a soft and comfortable feel against the skin. Additionally, they come in a free size that can suit a wide range of weights, ensuring a comfortable fit for everyone.',
                'price' => '20',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 1, 
            ],
            [
                'name' => 'Camel Shirt',
                'image' => 'http://127.0.0.1:8000/assets/img/1698692764.png',
                'description' => 'Our shirts are crafted from 100% cotton, providing a soft and comfortable feel against the skin. Additionally, they come in a free size that can suit a wide range of weights, ensuring a comfortable fit for everyone.',
                'price' => '20',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 1, 
            ],
            [
                'name' => 'Pink Shirt',
                'image' => 'http://127.0.0.1:8000/assets/img/1698693798.png',
                'description' => 'Our shirts are crafted from 100% cotton, providing a soft and comfortable feel against the skin. Additionally, they come in a free size that can suit a wide range of weights, ensuring a comfortable fit for everyone.',
                'price' => '20',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 1, 
            ],
            [
                'name' => 'Mint Green Shirt',
                'image' => 'http://127.0.0.1:8000/assets/img/1698693835.png',
                'description' => 'Our shirts are crafted from 100% cotton, providing a soft and comfortable feel against the skin. Additionally, they come in a free size that can suit a wide range of weights, ensuring a comfortable fit for everyone.',
                'price' => '20',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 1, 
            ],
            [
                'name' => 'turkuaz Shirt',
                'image' => 'http://127.0.0.1:8000/assets/img/1698693941.png',
                'description' => 'Our shirts are crafted from 100% cotton, providing a soft and comfortable feel against the skin. Additionally, they come in a free size that can suit a wide range of weights, ensuring a comfortable fit for everyone.',
                'price' => '20',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 1, 
            ],
            [
                'name' => 'Red Shirt',
                'image' => 'http://127.0.0.1:8000/assets/img/1698693914.png',
                'description' => 'Our shirts are crafted from 100% cotton, providing a soft and comfortable feel against the skin. Additionally, they come in a free size that can suit a wide range of weights, ensuring a comfortable fit for everyone.',
                'price' => '20',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 1, 
            ],
            
        ];

        foreach ($items as $itemData) {
            Item::create($itemData);
        }
    }
}

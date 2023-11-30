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
            // shirts seeder
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
            // shirts seeder end

            // scrub seeder
            [
                'name' => 'Black Scrub',
                'image' => 'http://127.0.0.1:8000/assets/images/img/scrubs/scrub1.jpg',                
                'description' => 'Our scrubs are meticulously crafted from high-quality, breathable fabric, offering a comfortable and durable solution for healthcare professionals. Made to withstand the demands of a fast-paced work environment, these scrubs provide a perfect blend of functionality and style. With a unisex design and a range of sizes, our scrubs ensure a comfortable fit for healthcare workers of all shapes and sizes, allowing them to focus on what matters most – providing excellent care.',
                'price' => '35',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 3,
            ],
            [
                'name' => 'Black Scrub',
                'image' => 'http://127.0.0.1:8000/assets/images/img/scrubs/scrub2.jpg',
                'description' => 'Our scrubs are meticulously crafted from high-quality, breathable fabric, offering a comfortable and durable solution for healthcare professionals. Made to withstand the demands of a fast-paced work environment, these scrubs provide a perfect blend of functionality and style. With a unisex design and a range of sizes, our scrubs ensure a comfortable fit for healthcare workers of all shapes and sizes, allowing them to focus on what matters most – providing excellent care.',
                'price' => '35',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 3,
            ],
            [
                'name' => 'Black Scrub',
                'image' => 'http://127.0.0.1:8000/assets/images/img/scrubs/scrub3.jpg',
                'description' => 'Our scrubs are meticulously crafted from high-quality, breathable fabric, offering a comfortable and durable solution for healthcare professionals. Made to withstand the demands of a fast-paced work environment, these scrubs provide a perfect blend of functionality and style. With a unisex design and a range of sizes, our scrubs ensure a comfortable fit for healthcare workers of all shapes and sizes, allowing them to focus on what matters most – providing excellent care.',
                'price' => '35',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 3,
            ],
            [
                'name' => 'Black Scrub',
                'image' => 'http://127.0.0.1:8000/assets/images/img/scrubs/scrub4.jpg',
                'description' => 'Our scrubs are meticulously crafted from high-quality, breathable fabric, offering a comfortable and durable solution for healthcare professionals. Made to withstand the demands of a fast-paced work environment, these scrubs provide a perfect blend of functionality and style. With a unisex design and a range of sizes, our scrubs ensure a comfortable fit for healthcare workers of all shapes and sizes, allowing them to focus on what matters most – providing excellent care.',
                'price' => '35',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 3,
            ],
            [
                'name' => 'Black Scrub',
                'image' => 'http://127.0.0.1:8000/assets/images/img/scrubs/scrub5.jpg',
                'description' => 'Our scrubs are meticulously crafted from high-quality, breathable fabric, offering a comfortable and durable solution for healthcare professionals. Made to withstand the demands of a fast-paced work environment, these scrubs provide a perfect blend of functionality and style. With a unisex design and a range of sizes, our scrubs ensure a comfortable fit for healthcare workers of all shapes and sizes, allowing them to focus on what matters most – providing excellent care.',
                'price' => '35',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 3,
            ],
            [
                'name' => 'Black Scrub',
                'image' => 'http://127.0.0.1:8000/assets/images/img/scrubs/scrub6.jpg',
                'description' => 'Our scrubs are meticulously crafted from high-quality, breathable fabric, offering a comfortable and durable solution for healthcare professionals. Made to withstand the demands of a fast-paced work environment, these scrubs provide a perfect blend of functionality and style. With a unisex design and a range of sizes, our scrubs ensure a comfortable fit for healthcare workers of all shapes and sizes, allowing them to focus on what matters most – providing excellent care.',
                'price' => '35',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 3,
            ],
            [
                'name' => 'Black Scrub',
                'image' => 'http://127.0.0.1:8000/assets/images/img/scrubs/scrub7.jpg',
                'description' => 'Our scrubs are meticulously crafted from high-quality, breathable fabric, offering a comfortable and durable solution for healthcare professionals. Made to withstand the demands of a fast-paced work environment, these scrubs provide a perfect blend of functionality and style. With a unisex design and a range of sizes, our scrubs ensure a comfortable fit for healthcare workers of all shapes and sizes, allowing them to focus on what matters most – providing excellent care.',
                'price' => '35',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 3,
            ],
            [
                'name' => 'Black Scrub',
                'image' => 'http://127.0.0.1:8000/assets/images/img/scrubs/scrub8.jpg',
                'description' => 'Our scrubs are meticulously crafted from high-quality, breathable fabric, offering a comfortable and durable solution for healthcare professionals. Made to withstand the demands of a fast-paced work environment, these scrubs provide a perfect blend of functionality and style. With a unisex design and a range of sizes, our scrubs ensure a comfortable fit for healthcare workers of all shapes and sizes, allowing them to focus on what matters most – providing excellent care.',
                'price' => '35',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 3,
            ],
            [
                'name' => 'Black Scrub',
                'image' => 'http://127.0.0.1:8000/assets/images/img/scrubs/scrub9.jpg',
                'description' => 'Our scrubs are meticulously crafted from high-quality, breathable fabric, offering a comfortable and durable solution for healthcare professionals. Made to withstand the demands of a fast-paced work environment, these scrubs provide a perfect blend of functionality and style. With a unisex design and a range of sizes, our scrubs ensure a comfortable fit for healthcare workers of all shapes and sizes, allowing them to focus on what matters most – providing excellent care.',
                'price' => '35',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 3,
            ],
            [
                'name' => 'Black Scrub',
                'image' => 'http://127.0.0.1:8000/assets/images/img/scrubs/scrub10.jpg',
                'description' => 'Our scrubs are meticulously crafted from high-quality, breathable fabric, offering a comfortable and durable solution for healthcare professionals. Made to withstand the demands of a fast-paced work environment, these scrubs provide a perfect blend of functionality and style. With a unisex design and a range of sizes, our scrubs ensure a comfortable fit for healthcare workers of all shapes and sizes, allowing them to focus on what matters most – providing excellent care.',
                'price' => '35',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 3,
            ],
            [
                'name' => 'Black Scrub',
                'image' => 'http://127.0.0.1:8000/assets/images/img/scrubs/scrub11.jpg',
                'description' => 'Our scrubs are meticulously crafted from high-quality, breathable fabric, offering a comfortable and durable solution for healthcare professionals. Made to withstand the demands of a fast-paced work environment, these scrubs provide a perfect blend of functionality and style. With a unisex design and a range of sizes, our scrubs ensure a comfortable fit for healthcare workers of all shapes and sizes, allowing them to focus on what matters most – providing excellent care.',
                'price' => '35',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 3,
            ],
            [
                'name' => 'Black Scrub',
                'image' => 'http://127.0.0.1:8000/assets/images/img/scrubs/scrub12.jpg',
                'description' => 'Our scrubs are meticulously crafted from high-quality, breathable fabric, offering a comfortable and durable solution for healthcare professionals. Made to withstand the demands of a fast-paced work environment, these scrubs provide a perfect blend of functionality and style. With a unisex design and a range of sizes, our scrubs ensure a comfortable fit for healthcare workers of all shapes and sizes, allowing them to focus on what matters most – providing excellent care.',
                'price' => '35',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 3,
            ],
            // scrub seeder end

            // Labcoat seeder 
            [
                'name' => 'White Labcoat',
                'image' => 'http://127.0.0.1:8000/assets/images/img/labcoats/labcoat1.jpg',
                'description' => 'our lab coats feature high-quality, breathable fabric for comfort and durability. Designed to meet the demands of lab settings, they blend functionality with style. With a unisex design and various sizes, our lab coats ensure a comfortable fit for all, empowering professionals to focus on their important work.',
                'price' => '30',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 4,
            ],
            [
                'name' => 'Black Labcoat',
                'image' => 'http://127.0.0.1:8000/assets/images/img/labcoats/labcoat2.png',
                'description' => 'our lab coats feature high-quality, breathable fabric for comfort and durability. Designed to meet the demands of lab settings, they blend functionality with style. With a unisex design and various sizes, our lab coats ensure a comfortable fit for all, empowering professionals to focus on their important work.',
                'price' => '30',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 4,
            ],
            [
                'name' => 'Blue Labcoat',
                'image' => 'http://127.0.0.1:8000/assets/images/img/labcoats/labcoat3.png',
                'description' => 'our lab coats feature high-quality, breathable fabric for comfort and durability. Designed to meet the demands of lab settings, they blend functionality with style. With a unisex design and various sizes, our lab coats ensure a comfortable fit for all, empowering professionals to focus on their important work.',
                'price' => '30',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 4,
            ],
            [
                'name' => 'Purple Labcoat',
                'image' => 'http://127.0.0.1:8000/assets/images/img/labcoats/labcoat4.jpg',
                'description' => 'our lab coats feature high-quality, breathable fabric for comfort and durability. Designed to meet the demands of lab settings, they blend functionality with style. With a unisex design and various sizes, our lab coats ensure a comfortable fit for all, empowering professionals to focus on their important work.',
                'price' => '30',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 4,
            ],
            [
                'name' => 'Ivury Labcoat',
                'image' => 'http://127.0.0.1:8000/assets/images/img/labcoats/labcoat5.png',
                'description' => 'our lab coats feature high-quality, breathable fabric for comfort and durability. Designed to meet the demands of lab settings, they blend functionality with style. With a unisex design and various sizes, our lab coats ensure a comfortable fit for all, empowering professionals to focus on their important work.',
                'price' => '30',
                'stock_quantity' => 75,
                'size' => 'free size',
                'category_id' => 4,
            ],

            // labcoat seeder end
        ];

        foreach ($items as $itemData) {
            Item::create($itemData);
        }
    }
}

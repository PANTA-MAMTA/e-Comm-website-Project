<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            // -------- Mobiles --------
            [
                'name' => 'iPhone 14 Pro',
                'price' => 1200,
                'description' => 'Latest Apple smartphone with A16 chip and triple camera system.',
                'category' => 'mobile',
                'gallery' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=500&q=80'
            ],

            [
                'name' => 'OnePlus 11',
                'price' => 850,
                'description' => 'Flagship killer phone with fast charging and clean UI.',
                'category' => 'mobile',
                'gallery' => 'https://images.unsplash.com/photo-1510557880182-3d4d3cba35a5?auto=format&fit=crop&w=500&q=80'
            ],

            // -------- Laptops --------
            [
                'name' => 'MacBook Pro 16"',
                'price' => 2400,
                'description' => 'Powerful Apple laptop with M2 Pro chip for professionals.',
                'category' => 'laptop',
                'gallery' => 'https://images.unsplash.com/photo-1517433456452-f9633a875f6f?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'Dell XPS 13',
                'price' => 1300,
                'description' => 'Compact ultrabook with edge-to-edge infinity display.',
                'category' => 'laptop',
                'gallery' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'HP Spectre x360',
                'price' => 1600,
                'description' => 'Premium 2-in-1 laptop with touchscreen and long battery life.',
                'category' => 'laptop',
                'gallery' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'Lenovo ThinkPad X1 Carbon',
                'price' => 1500,
                'description' => 'Business ultrabook with robust build and long battery life.',
                'category' => 'laptop',
                'gallery' => 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'Asus ROG Zephyrus',
                'price' => 1800,
                'description' => 'Gaming laptop with high refresh rate display and strong GPU.',
                'category' => 'laptop',
                'gallery' => 'https://images.unsplash.com/photo-1612831455542-778f91a1d8e7?auto=format&fit=crop&w=500&q=80'
            ],

            // -------- Electronics --------
            [
                'name' => 'Sony WH-1000XM4 Headphones',
                'price' => 350,
                'description' => 'Industry leading noise-cancelling wireless headphones.',
                'category' => 'electronics',
                'gallery' => 'https://images.unsplash.com/photo-1517849845537-4d257902454a?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'Apple Watch Series 8',
                'price' => 500,
                'description' => 'Smartwatch with advanced health and fitness tracking.',
                'category' => 'electronics',
                'gallery' => 'https://images.unsplash.com/photo-1516574187841-cb9cc2ca948b?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'Xbox Wireless Controller',
                'price' => 69,
                'description' => 'High-quality gaming controller for PC and Xbox.',
                'category' => 'electronics',
                'gallery' => 'https://images.unsplash.com/photo-1511512578047-dfb367046420?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'Wireless Bluetooth Speaker',
                'price' => 120,
                'description' => 'Portable speaker with powerful bass and clear sound.',
                'category' => 'electronics',
                'gallery' => 'https://images.unsplash.com/photo-1484704849700-f032a568e944?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'Gaming Keyboard RGB',
                'price' => 80,
                'description' => 'Mechanical keyboard with customizable RGB lighting.',
                'category' => 'electronics',
                'gallery' => 'https://images.unsplash.com/photo-1593642532973-d31b6557fa68?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'Canon DSLR Camera',
                'price' => 700,
                'description' => 'High-quality camera ideal for photography and video shooting.',
                'category' => 'electronics',
                'gallery' => 'https://images.unsplash.com/photo-1519183071298-a2962eadcdb2?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'Wireless Earbuds',
                'price' => 150,
                'description' => 'Compact earbuds with noise cancellation and long battery life.',
                'category' => 'electronics',
                'gallery' => 'https://images.unsplash.com/photo-1580894908361-9a4b67b5cdee?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'Portable Power Bank',
                'price' => 40,
                'description' => '10000mAh power bank for charging smartphones on the go.',
                'category' => 'electronics',
                'gallery' => 'https://images.unsplash.com/photo-1558898479-575d55a5b15f?auto=format&fit=crop&w=500&q=80'
            ],

            // -------- Accessories & Extra --------
            [
                'name' => 'Smartphone Tripod Stand',
                'price' => 25,
                'description' => 'Adjustable tripod stand for smartphone photography.',
                'category' => 'accessory',
                'gallery' => 'https://images.unsplash.com/photo-1554568218-5cac12c0a5bb?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'Laptop Sleeve 15 inch',
                'price' => 30,
                'description' => 'Protective neoprene sleeve for 15" laptops.',
                'category' => 'accessory',
                'gallery' => 'https://images.unsplash.com/photo-1587825140501-38f7e68c62df?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'USB-C Hub Adapter',
                'price' => 45,
                'description' => 'Multi-port USB-C hub with HDMI, USB-A, SD card support.',
                'category' => 'accessory',
                'gallery' => 'https://images.unsplash.com/photo-1545239351-1141bd82e8a6?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'External SSD 1TB',
                'price' => 120,
                'description' => 'Portable 1TB SSD with fast read/write speeds.',
                'category' => 'electronics',
                'gallery' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'Wireless Mouse',
                'price' => 25,
                'description' => 'Ergonomic wireless mouse with high precision sensor.',
                'category' => 'accessory',
                'gallery' => 'https://images.unsplash.com/photo-1587825140459-5745de6d23ea?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'Smartphone Car Charger',
                'price' => 20,
                'description' => 'Fast charging car adapter for smartphones and tablets.',
                'category' => 'accessory',
                'gallery' => 'https://images.unsplash.com/photo-1593642532986-d31b6557fa69?auto=format&fit=crop&w=500&q=80'
            ],

            // -------- Home & Audio --------
            [
                'name' => 'Noise Cancelling Earphones',
                'price' => 90,
                'description' => 'In-ear earphones with deep bass and noise reduction.',
                'category' => 'electronics',
                'gallery' => 'https://images.unsplash.com/photo-1495069784732-75fed19da227?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'Smart LED Desk Lamp',
                'price' => 45,
                'description' => 'Adjustable LED lamp with touch control and brightness levels.',
                'category' => 'home',
                'gallery' => 'https://images.unsplash.com/photo-1582719478173-6a4b77b18771?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => '4K Monitor 27 inch',
                'price' => 300,
                'description' => 'Ultra HD monitor for work and gaming.',
                'category' => 'electronics',
                'gallery' => 'https://images.unsplash.com/photo-1517336714731-49abcfd2b6c8?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'Wireless Charging Pad',
                'price' => 35,
                'description' => 'Qi‑enabled pad for wireless charging compatible devices.',
                'category' => 'accessory',
                'gallery' => 'https://images.unsplash.com/photo-1593642532950-82c678d7e3b3?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'Bluetooth Earbuds Case',
                'price' => 15,
                'description' => 'Protective and stylish case for your wireless earbuds.',
                'category' => 'accessory',
                'gallery' => 'https://images.unsplash.com/photo-1554568219-5dac12c0b5bb?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'Gaming Mouse Pad Large',
                'price' => 18,
                'description' => 'Extended size mouse pad for gaming and workstations.',
                'category' => 'accessory',
                'gallery' => 'https://images.unsplash.com/photo-1593642532975-d31b6577fa68?auto=format&fit=crop&w=500&q=80'
            ],

            // -------- TVs --------
            [
                'name' => 'Samsung 55" QLED 4K TV',
                'price' => 1200,
                'description' => 'Stunning 4K QLED TV with HDR and smart features.',
                'category' => 'tv',
                'gallery' => 'https://images.unsplash.com/photo-1589987604932-66c1c0b8e31a?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'LG 65" OLED TV',
                'price' => 2500,
                'description' => 'OLED TV with perfect blacks and vivid colors for cinematic experience.',
                'category' => 'tv',
                'gallery' => 'https://images.unsplash.com/photo-1602524818500-92f2a2c3d7d7?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'Sony 50" Bravia 4K TV',
                'price' => 1100,
                'description' => 'High-quality LED TV with smart features and excellent color accuracy.',
                'category' => 'tv',
                'gallery' => 'https://images.unsplash.com/photo-1590642918830-6d05c2f21c5d?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'TCL 55" 4K UHD TV',
                'price' => 650,
                'description' => 'Affordable 4K TV with HDR support and streaming apps.',
                'category' => 'tv',
                'gallery' => 'https://images.unsplash.com/photo-1602524825123-8b4a2b9d4d3b?auto=format&fit=crop&w=500&q=80'
            ],
            [
                'name' => 'Panasonic 65" LED TV',
                'price' => 1300,
                'description' => 'LED TV with vibrant colors and smart TV capabilities.',
                'category' => 'tv',
                'gallery' => 'https://images.unsplash.com/photo-1602524824992-5e3a9d3e9a7d?auto=format&fit=crop&w=500&q=80'
            ],
        ]);
    }
}

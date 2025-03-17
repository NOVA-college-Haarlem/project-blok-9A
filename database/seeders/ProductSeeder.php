<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'iPhone 15',
            'slug' => 'iphone-15',
            'description' => 'iPhone 15 description',
            'image' => 'iphone-15.jpg',
            'price' => 100000,
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Lenovo ThinkPad',
            'slug' => 'lenovo-thinkpad',
            'description' => 'Lenovo ThinkPad description',
            'image' => 'lenovo-thinkpad.jpg',
            'price' => 100000,
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'iPad Pro',
            'slug' => 'ipad-pro',
            'description' => 'iPad Pro description',
            'image' => 'ipad-pro.jpg',
            'price' => 100000,
            'category_id' => 3,
        ]);
    }
}

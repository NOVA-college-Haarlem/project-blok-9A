<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Mobile',
            'slug' => 'mobile',
            'description' => 'Mobile products',
            'image_local' => 'mobile.jpg',
            'image_url' => 'https://pishondesigns.org/Dbase/wp-content/uploads/2012/05/real-mobile-2x-1400x770.png',
        ]);

        Category::create([
            'name' => 'Laptop',
            'slug' => 'laptop',
            'description' => 'Laptop products',
            'image_local' => 'laptop.jpg',
            'image_url' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/best-laptops-1589464856.jpg?crop=1.00xw:1.00xh;0,0&resize=1200:*',
        ]);

        Category::create([
            'name' => 'Tablet',
            'slug' => 'tablet',
            'description' => 'Tablet products',
            'image_local' => 'tablet.jpg',
            'image_url' => 'https://ocdn.eu/pulscms-transforms/1/0uYktkpTURBXy9hYWFkN2Y2ZmRkZGM3OGE0NTVmZWIxOGE0NGNhNzJkYi5qcGeSlQMAAM0U1c0Lt5MFzQNrzQHb',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Artisan Bread',
                'slug' => 'artisan-bread',
                'description' => 'Freshly baked artisan breads made with quality ingredients.',
            ],
            [
                'name' => 'Pastry',
                'slug' => 'pastry',
                'description' => 'Delicious buttery pastries with premium flavors.',
            ],
            [
                'name' => 'Cake',
                'slug' => 'cake',
                'description' => 'Premium cakes for every special occasion.',
            ],
            [
                'name' => 'Cookies & Dessert',
                'slug' => 'cookies-dessert',
                'description' => 'Sweet cookies and desserts made with love.',
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
}

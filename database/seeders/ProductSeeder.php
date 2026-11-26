<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'category' => 'artisan-bread',
                'name' => 'Classic Artisan Bread',
                'slug' => 'classic-artisan-bread',
                'description' => 'Roti artisan dengan tekstur lembut di dalam dan renyah di luar, dibuat menggunakan bahan pilihan.',
                'price' => 45000,
                'stock' => 20,
                'image' => 'products/1.jpg',
            ],
            [
                'category' => 'pastry',
                'name' => 'Butter Croissant',
                'slug' => 'butter-croissant',
                'description' => 'Croissant dengan lapisan pastry renyah dan aroma butter yang menggugah selera.',
                'price' => 28000,
                'stock' => 25,
                'image' => 'products/2.jpg',
            ],
            [
                'category' => 'cake',
                'name' => 'Chocolate Premium Cake',
                'slug' => 'chocolate-premium-cake',
                'description' => 'Kue cokelat premium dengan tekstur lembut dan rasa cokelat yang kaya.',
                'price' => 85000,
                'stock' => 12,
                'image' => 'products/3.jpg',
            ],
            [
                'category' => 'cookies-dessert',
                'name' => 'Chocolate Chip Cookies',
                'slug' => 'chocolate-chip-cookies',
                'description' => 'Cookies renyah dengan taburan chocolate chips yang melimpah.',
                'price' => 35000,
                'stock' => 30,
                'image' => 'products/4.jpg',
            ],
            [
                'category' => 'cake',
                'name' => 'Strawberry Shortcake',
                'slug' => 'strawberry-shortcake',
                'description' => 'Cake lembut dengan perpaduan krim dan rasa strawberry yang segar.',
                'price' => 95000,
                'stock' => 10,
                'image' => 'products/5.jpg',
            ],
            [
                'category' => 'pastry',
                'name' => 'Cinnamon Roll',
                'slug' => 'cinnamon-roll',
                'description' => 'Roti gulung dengan aroma kayu manis dan lapisan icing manis.',
                'price' => 32000,
                'stock' => 18,
                'image' => 'products/6.jpg',
            ],
            [
                'category' => 'pastry',
                'name' => 'Blueberry Muffin',
                'slug' => 'blueberry-muffin',
                'description' => 'Muffin lembut dengan perpaduan rasa manis dan segar blueberry.',
                'price' => 25000,
                'stock' => 20,
                'image' => 'products/7.jpg',
            ],
            [
                'category' => 'cookies-dessert',
                'name' => 'Fudgy Brownies',
                'slug' => 'fudgy-brownies',
                'description' => 'Brownies cokelat dengan tekstur fudgy, padat, dan kaya rasa.',
                'price' => 40000,
                'stock' => 15,
                'image' => 'products/8.jpg',
            ],
        ];

        foreach ($products as $product) {
            $category = Category::where(
                'slug',
                $product['category']
            )->firstOrFail();

            Product::updateOrCreate(
                ['slug' => $product['slug']],
                [
                    'category_id' => $category->id,
                    'name' => $product['name'],
                    'slug' => $product['slug'],
                    'description' => $product['description'],
                    'price' => $product['price'],
                    'stock' => $product['stock'],
                    'image' => $product['image'],
                ]
            );
        }
    }
}

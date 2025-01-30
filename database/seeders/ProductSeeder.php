<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [

            // Canned Goods
            ['name' => 'Corned Beef', 'description' => 'Premium canned corned beef', 'price' => 75.00, 'category_id' => 1],
            ['name' => 'Sardines in Tomato Sauce', 'description' => 'Classic sardines with tomato sauce', 'price' => 25.00, 'category_id' => 1],
            ['name' => 'Luncheon Meat', 'description' => 'Savory canned pork luncheon meat', 'price' => 150.00, 'category_id' => 1],

            // Dairy Products
            ['name' => 'Fresh Milk', 'description' => 'Pasteurized full-cream milk', 'price' => 95.00, 'category_id' => 2],
            ['name' => 'Cheddar Cheese', 'description' => 'Sharp and creamy cheddar cheese block', 'price' => 200.00, 'category_id' => 2],
            ['name' => 'Yogurt Cup', 'description' => 'Fruit-flavored probiotic yogurt', 'price' => 45.00, 'category_id' => 2],

            // Noodles
            ['name' => 'Instant Ramen', 'description' => 'Spicy chicken-flavored instant noodles', 'price' => 25.00, 'category_id' => 3],
            ['name' => 'Spaghetti Pasta', 'description' => 'Classic Italian-style spaghetti noodles', 'price' => 75.00, 'category_id' => 3],
            ['name' => 'Rice Noodles', 'description' => 'Delicate thin rice noodles', 'price' => 50.00, 'category_id' => 3],

            // Frozen Foods
            ['name' => 'Frozen Chicken Nuggets', 'description' => 'Ready-to-cook crispy chicken nuggets', 'price' => 200.00, 'category_id' => 4],
            ['name' => 'Frozen Mixed Vegetables', 'description' => 'Assorted frozen carrots, corn, and peas', 'price' => 150.00, 'category_id' => 4],
            ['name' => 'Frozen Fish Fillet', 'description' => 'Premium breaded fish fillet', 'price' => 250.00, 'category_id' => 4],

            // Beverages
            ['name' => 'Orange Juice', 'description' => 'Freshly squeezed orange juice', 'price' => 120.00, 'category_id' => 5],
            ['name' => 'Bottled Water', 'description' => 'Purified drinking water', 'price' => 20.00, 'category_id' => 5],
            ['name' => 'Iced Coffee', 'description' => 'Chilled brewed coffee with milk', 'price' => 90.00, 'category_id' => 5],

            // Liquor
            ['name' => 'Red Wine', 'description' => 'Rich and smooth Cabernet Sauvignon', 'price' => 600.00, 'category_id' => 6],
            ['name' => 'Whiskey', 'description' => 'Aged premium malt whiskey', 'price' => 1500.00, 'category_id' => 6],
            ['name' => 'Beer Can', 'description' => 'Refreshing and crisp canned beer', 'price' => 60.00, 'category_id' => 6],

            // Snacks
            ['name' => 'Potato Chips', 'description' => 'Crispy and salty potato chips', 'price' => 50.00, 'category_id' => 7],
            ['name' => 'Chocolate Bar', 'description' => 'Rich and creamy milk chocolate bar', 'price' => 70.00, 'category_id' => 7],
            ['name' => 'Peanut Butter Crackers', 'description' => 'Crunchy crackers filled with peanut butter', 'price' => 30.00, 'category_id' => 7],

            // Cleaning Products
            ['name' => 'Dishwashing Liquid', 'description' => 'Tough on grease, gentle on hands', 'price' => 85.00, 'category_id' => 8],
            ['name' => 'Laundry Detergent', 'description' => 'Powerful stain remover detergent', 'price' => 150.00, 'category_id' => 8],
            ['name' => 'Air Freshener', 'description' => 'Long-lasting fresh scent spray', 'price' => 120.00, 'category_id' => 8],

            // School and Office Supplies
            ['name' => 'Notebook', 'description' => '100-page ruled notebook for school or office use', 'price' => 30.00, 'category_id' => 9],
            ['name' => 'Ballpoint Pen', 'description' => 'Smooth-writing black ink pen', 'price' => 10.00, 'category_id' => 9],
            ['name' => 'Sticky Notes', 'description' => 'Brightly colored sticky note pads', 'price' => 45.00, 'category_id' => 9],
        ];
        foreach($products as $product){
            \App\Models\Product::create($product);
        }

        }
    }


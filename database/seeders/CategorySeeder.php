<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Canned Goods', 'description' => 'Various canned food items'],
            ['name' => 'Dairy Products', 'description' => 'Milk, cheese, yogurt, and other dairy items'],
            ['name' => 'Noodles', 'description' => 'Instant noodles, pasta, and similar products'],
            ['name' => 'Frozen Foods', 'description' => 'Frozen meat, vegetables, and prepared meals'],
            ['name' => 'Beverages', 'description' => 'Juices, sodas, and other drinks'],
            ['name' => 'Liquor', 'description' => 'Alcoholic beverages such as wine, beer, and spirits'],
            ['name' => 'Snacks', 'description' => 'Chips, cookies, and other quick bites'],
            ['name' => 'Cleaning Products', 'description' => 'Household cleaning supplies and detergents'],
            ['name' => 'School and Office Supplies', 'description' => 'Stationery, notebooks, and office essentials'],
        ];
        foreach ($categories as $category){
            \App\Models\Category::create($category);
        }
    }
}

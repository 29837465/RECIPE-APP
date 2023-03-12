<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ingredient::create([
            'name' => 'Croissant French Toast',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Overnight Breakfast Bake with Ham, Cheese, and Croissants',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Chocolate Cereal Breakfast Bars',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Basted Eggs',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Delicious Egg Salad for Sandwiches',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Best Cream Of Broccoli Soup',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Ukrainian Red Borscht Soup',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Homemade Sloppy Joes',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Stout-Braised Lamb Shanks',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Prosciutto-Wrapped Pork Tenderloin with Crispy Sage',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Lasagna Flatbread',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Mississippi Chicken',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Vegan Pumpkin Pancakes',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Apple Fritter Pancakes',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Donut Pan Egg Sandwiches',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Waffles',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Church Supper Macaroni and Cheese',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'The Best Meatballs',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Daddy Eddie`s Roast Pork (Pernil), Puerto Rican-Style',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Simple Pork Chops',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Thai Shrimp Wonton Cups',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'TikTok Candied Kielbasa Bites',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Air Fryer Crispy Cajun Black-Eyed Peas',
            'is_active' => true,
        ]);

        Ingredient::create([
            'name' => 'Air Fryer Pretzel Crescent Rolls',
            'is_active' => true,
        ]);

    }
}

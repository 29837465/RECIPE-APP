<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Breakfast',
            'is_active' => true,
        ]);

        Category::create([
            'name' => 'Lunch',
            'is_active' => true,
        ]);

        Category::create([
            'name' => 'Dinner',
            'is_active' => true,
        ]);

        Category::create([
            'name' => 'Brunch',
            'is_active' => true,
        ]);

        Category::create([
            'name' => 'Supper',
            'is_active' => false,
        ]);

        Category::create([
            'name' => 'snacks',
            'is_active' => true,
        ]);

    }
}

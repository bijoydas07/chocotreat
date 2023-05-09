<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'title' => 'Cloth',
            'description' => 'Cloth Description',
        ]);
        Category::create([
            'title' => 'Men Cloth',
            'description' => 'Men Cloth Description',
        ]);
        Category::create([
            'title' => 'Women Cloth',
            'description' => 'Women Cloth Description',
        ]);
    }
}

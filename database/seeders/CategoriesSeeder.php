<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories= [
            ['name' => "Shoes", 'slug' => Str::slug('shoes'), 'description' => 'All Shoes Types', 'status' => 1],
            ['name' => "Shirts", 'slug' => Str::slug('shirts'), 'description' => 'All Shirts Types', 'status' => 1],
            ['name' => "Shorts", 'slug' => Str::slug('shorts'), 'description' => 'All Shorts Types', 'status' => 1],

        ];

        foreach ($categories as $category){
            Category::query()->firstOrCreate($category);
        }
    }
}

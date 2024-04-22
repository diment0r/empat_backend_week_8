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
        Category::factory()->create([
            'name' => 'Humor',
            'subcategory' => 'Jokes',
        ]);

        Category::factory()->create([
            'name' => 'IT',
            'subcategory' => 'Cyber Security',
        ]);

        Category::factory()->create([
            'name' => 'Medicine',
            'subcategory' => 'Surgery',
        ]);

        Category::factory()->create([
            'name' => 'Education',
            'subcategory' => 'School',
        ]);
        
    }
}

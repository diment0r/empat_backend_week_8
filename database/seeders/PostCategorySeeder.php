<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        Post::all()->each(function ($post) use ($categories) {
            $l = rand(1,4);
            $arr = range(0, 3);
            shuffle($arr);
            for($i = 0; $i < $l; $i++) {
                $post->categories()->save($categories[$arr[$i]]);
            }
        });
    }
}

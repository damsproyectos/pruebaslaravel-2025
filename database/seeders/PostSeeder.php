<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Post::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        for ( $i=0; $i<10; $i++ ) {
            // $title = Str::random(10);
            $title = str()->random(10);
            $c = Category::inRandomOrder()->first();
            Post::create(
                [
                    'title' => $title,
                    // 'slug' => Str::slug($title),
                    'slug' => str($title)->slug(),
                    'description' => 'Lorem, ipsum dolor',
                    'content' => 'Lorem, ipsum dolor',
                    'posted' => 'yes',
                    'category_id'=> $c->id
                ]
            );
        }
    }
}

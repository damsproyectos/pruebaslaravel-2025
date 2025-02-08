<?php

use App\Models\Category;
use App\Models\Post;

$post = Post::find(1);
$post = Post::find(1);
$post = Post::find(1);

dd($post->category_id);
dd($post->category);
dd($post->category->title);

$post = Post::find(1);
dd($post->category_id);

$post = Post::find(1);
dd($post->category);

$post = Post::find(1);
dd($post->category->title);

$post = Post::find(1);
dd($post->category->slug);

//***************************CATEGORIAS************************************* */
$category = Category::find(1);
dd($category->posts);

$category = Category::find(1);
dd($category->posts[0]->title);

$category = Category::find(1);
dd($category->posts[0]->title);

///Migraciones
php artisan make:migration createCategoriesTable

php artisan make:migration createCategoriesTable
php artisan make:migration createCategoriesTable

php artisan migrate
php artisan migrate:rollback

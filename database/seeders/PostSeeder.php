<?php 
// PostSeeder.php
namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::create([
            'title' => 'The Future of AI',
            'content' => 'AI is transforming the world in numerous ways...',
            'category_id' => Category::where('name', 'Technology')->first()->id,
            'user_id' => User::where('email', 'johndoe@example.com')->first()->id,
        ]);

        Post::create([
            'title' => 'Healthy Living Tips',
            'content' => 'To live a healthier life, focus on balanced nutrition...',
            'category_id' => Category::where('name', 'Health')->first()->id,
            'user_id' => User::where('email', 'janesmith@example.com')->first()->id,
        ]);

        Post::create([
            'title' => 'Top 10 Lifestyle Hacks',
            'content' => 'Here are the top 10 lifestyle hacks to improve your life...',
            'category_id' => Category::where('name', 'Lifestyle')->first()->id,
            'user_id' => User::where('email', 'johndoe@example.com')->first()->id,
        ]);
    }
}

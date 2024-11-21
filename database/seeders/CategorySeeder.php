<?php
// CategorySeeder.php
namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Technology',
        ]);

        Category::create([
            'name' => 'Lifestyle',
        ]);

        Category::create([
            'name' => 'Health',
        ]);
    }
}

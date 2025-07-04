<?php

namespace Database\Seeders;

use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Javier Borjas',
            'email' => 'cristman11@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        Category::factory(5)->create();
        Post::factory(100)->create();
        Tag::factory(10)->create();
    }
}

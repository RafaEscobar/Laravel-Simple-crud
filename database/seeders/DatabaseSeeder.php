<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(10)->create();
        Author::factory()->create([
            "name" => "Sylvester",
            "last_name" => "Stallone"
        ]);
    }
}

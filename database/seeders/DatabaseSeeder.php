<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Post::factory(4)->create(['category' => 'Laravel Orion']);
        \App\Models\Post::factory(4)->create(['category' => 'Laravel Tips']);
        \App\Models\Post::factory(4)->create(['category' => 'Vue Tips']);
        \App\Models\Post::factory(4)->create(['category' => 'Coding Architecture']);
        \App\Models\Post::factory(4)->create(['category' => 'Coding Style Guide']);
        

    }
}

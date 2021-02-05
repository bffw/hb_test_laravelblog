<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Blog;
use App\Models\User;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Blog::factory()->count(30)->create(); 
    }
}

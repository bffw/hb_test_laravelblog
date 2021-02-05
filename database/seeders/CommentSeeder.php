<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {\App\Models\Comment::factory()->count(30)->create(); 
    }
}

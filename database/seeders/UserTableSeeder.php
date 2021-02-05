<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; 
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->count(30)->create(); 

          $user = User::find(1); 
        $user->name = "blog"; 

        $user->email = "blog@test.com"; 

        $user->password = bcrypt('blog'); 

        $user->save();  
        $user = User::find(2); 
        $user->name = "blog2"; 

        $user->email = "blog2@test.com"; 

        $user->password = bcrypt('blog2'); 

        $user->save();  
    }
}

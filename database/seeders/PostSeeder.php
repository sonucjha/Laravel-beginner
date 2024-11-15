<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run()
    {
         // Alternatively, you can use a loop to dynamically create 10 records
         for ($i = 3; $i <= 10; $i++) {
            DB::table('posts')->insert([
                'title' => "Post $i Title",
                'body' => "This is the body of Post $i.",
                'user_id' => rand(1, 10), // Randomly generate user_id between 1 and 10
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
    }

}

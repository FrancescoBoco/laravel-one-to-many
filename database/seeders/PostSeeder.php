<?php

namespace Database\Seeders;

use App\Http\Controllers\Admin\Post as AdminPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Fake generator  
use Faker\Generator as Faker;

// Model 
use App\Http\Controllers\Admin\Post;
use App\Models\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        

        // Post::truncate();
        for ($i=0; $i < 20; $i++) { 
            $newData = new User();
            $newData->title = $faker->title;
            $newData->description = $faker->description;
            $newData->age = $faker->age;
        }
    }
}

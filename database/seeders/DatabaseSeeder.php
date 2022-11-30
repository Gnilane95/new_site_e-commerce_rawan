<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Avi;
use App\Models\Bijou;
use App\Models\Enfant;
use App\Models\Femme;
use App\Models\Homme;
use App\Models\Image;
use App\Models\PostBlog;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        PostBlog::factory(5)->create();
        PostCategory::factory(10)->create();
        Bijou::factory(10)->create();
        Image::factory(10)->create();
        Avi::factory(5)->create();
        Femme::factory(5)->create();
        Homme::factory(5)->create();
        Enfant::factory(5)->create();
    }
}

<?php

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
        $this->call(GallerySeeder::class);
        $this->call(CardSeeder::class);
        $this->call(PostsSeeder::class);
        $this->call(SliderSeeder::class);
    }
}

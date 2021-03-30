<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['link'=>'/img/image4.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['link'=>'/img/image5.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['link'=>'/img/image6.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['link'=>'/img/image4.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        \DB::table('galleries')->insert($data);
    }
}

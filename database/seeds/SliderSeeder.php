<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['link'=>'/img/image1.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['link'=>'/img/image2.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['link'=>'/img/image3.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        \DB::table('sliders')->insert($data);
    }
}

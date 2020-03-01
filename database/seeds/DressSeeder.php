<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dress')->insert([
            ['dress_type_id' => 1, 'dress_photo' => 'ACM1.jpg', 'price' => 20000],
            ['dress_type_id' => 1, 'dress_photo' => 'ACM2.jpg', 'price' => 20000],
            ['dress_type_id' => 1, 'dress_photo' => 'ACM3.jpg', 'price' => 20000],
            ['dress_type_id' => 1, 'dress_photo' => 'ACM4.jpg', 'price' => 20000],
            ['dress_type_id' => 1, 'dress_photo' => 'ACM5.jpg', 'price' => 20000],
            ['dress_type_id' => 1, 'dress_photo' => 'ACM6.jpg', 'price' => 20000],
            ['dress_type_id' => 1, 'dress_photo' => 'ACM7.jpg', 'price' => 20000],
            ['dress_type_id' => 1, 'dress_photo' => 'ACM8.jpg', 'price' => 20000],
            ['dress_type_id' => 1, 'dress_photo' => 'ACM9.jpg', 'price' => 20000],
            ['dress_type_id' => 1, 'dress_photo' => 'ACM10.jpg', 'price' => 20000],
        ]);
    }
}

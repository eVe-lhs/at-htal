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
            ['dress_type_id' => 1, 'dress_photo' => 'ACM1.jpg'],
            ['dress_type_id' => 1, 'dress_photo' => 'ACM2.jpg'],
            ['dress_type_id' => 1, 'dress_photo' => 'ACM3.jpg'],
            ['dress_type_id' => 1, 'dress_photo' => 'ACM4.jpg'],
            ['dress_type_id' => 1, 'dress_photo' => 'ACM5.jpg'],
            ['dress_type_id' => 1, 'dress_photo' => 'ACM6.jpg'],
            ['dress_type_id' => 1, 'dress_photo' => 'ACM7.jpg'],
            ['dress_type_id' => 1, 'dress_photo' => 'ACM8.jpg'],
            ['dress_type_id' => 1, 'dress_photo' => 'ACM9.jpg'],
            ['dress_type_id' => 1, 'dress_photo' => 'ACM10.jpg'],
        ]);
    }
}

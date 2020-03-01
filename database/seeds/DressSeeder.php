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
            ['dress_type_id' => 2, 'dress_photo' => 'DC1.jpg', 'price' => 20000],
            ['dress_type_id' => 2, 'dress_photo' => 'DC2.jpg', 'price' => 20000],
            ['dress_type_id' => 2, 'dress_photo' => 'DC3.jpg', 'price' => 20000],
            ['dress_type_id' => 2, 'dress_photo' => 'DC4.jpg', 'price' => 20000],
            ['dress_type_id' => 2, 'dress_photo' => 'DC5.jpg', 'price' => 20000],
            ['dress_type_id' => 2, 'dress_photo' => 'DC6.jpg', 'price' => 20000],
            ['dress_type_id' => 2, 'dress_photo' => 'DC7.jpg', 'price' => 20000],
            ['dress_type_id' => 2, 'dress_photo' => 'DC8.jpg', 'price' => 20000],
            ['dress_type_id' => 2, 'dress_photo' => 'DC9.jpg', 'price' => 20000],
            ['dress_type_id' => 2, 'dress_photo' => 'DC10.jpg', 'price' => 20000],
            ['dress_type_id' => 3, 'dress_photo' => 'barteik1.jpg', 'price' => 20000],
            ['dress_type_id' => 3, 'dress_photo' => 'barteik2.jpg', 'price' => 20000],
            ['dress_type_id' => 3, 'dress_photo' => 'barteik3.jpg', 'price' => 20000],
            ['dress_type_id' => 3, 'dress_photo' => 'barteik4.jpg', 'price' => 20000],
            ['dress_type_id' => 3, 'dress_photo' => 'barteik5.jpg', 'price' => 20000],
            ['dress_type_id' => 4, 'dress_photo' => 'long1.jpg', 'price' => 20000],
            ['dress_type_id' => 4, 'dress_photo' => 'long2.jpg', 'price' => 20000],
            ['dress_type_id' => 4, 'dress_photo' => 'long3.jpg', 'price' => 20000],
            ['dress_type_id' => 4, 'dress_photo' => 'long4.jpg', 'price' => 20000],
        ]);
    }
}

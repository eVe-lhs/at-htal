<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrendingDressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trending_dress')->insert([
            ['dress_id' => 1],
            ['dress_id' => 2],
            ['dress_id' => 3],
            ['dress_id' => 4],
            ['dress_id' => 5],
            ['dress_id' => 6],
            ['dress_id' => 7],
            ['dress_id' => 8],
        ]);
    }
}

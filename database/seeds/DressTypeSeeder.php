<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DressTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dress_type')->insert([
            ['dress_type_name' => 'Cele'],
            ['dress_type_name' => 'Designer\'sCreation'],
            ['dress_type_name' => 'HtaTwarHtaLar'],
            ['dress_type_name' => 'LongDress'],
            ['dress_type_name' => 'Normal'],
            ['dress_type_name' => 'Pwel-Tat'],
            ['dress_type_name' => 'Traditional'],
            ['dress_type_name' => 'White'],
        ]);
    }
}

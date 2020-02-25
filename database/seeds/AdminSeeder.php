<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            [
                'name' => 'Admin1',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Admin2',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Admin3',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
            ],
        ];

        foreach($admin as $key => $value) {
            Admin::create($value);
        }
    }
}

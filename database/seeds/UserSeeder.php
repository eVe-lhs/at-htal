<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'customer',
                'email' => 'customer@gmail.com',
                'is_tailor' => '0',
                'password' => bcrypt('12345678'),
                'phone_number' => '09123456789',
                'address' => 'Yangon',
            ],
            [
                'name' => 'tailor',
                'email' => 'tailor@gmail.com',
                'is_tailor' => '1',
                'password' => bcrypt('12345678'),
                'phone_number' => '09123456789',
                'address' => 'Yangon',
            ],
        ];

        foreach($user as $key => $value) {
            User::create($value);
        }
    }
}

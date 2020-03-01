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
                'name' => 'Hla Hla',
                'email' => 'HlaHla@gmail.com',
                'is_tailor' => '0',
                'password' => bcrypt('12345678'),
                'phone_number' => '09123456789',
                'address' => 'Yangon',
            ],
            [
                'name' => 'Aye Aye',
                'email' => 'ayeaye@gmail.com',
                'is_tailor' => '1',
                'password' => bcrypt('12345678'),
                'phone_number' => '09123456789',
                'address' => 'Yangon',
            ],
            [
                'name' => 'Helen',
                'email' => 'helen@gmail.com',
                'is_tailor' => '0',
                'password' => bcrypt('12345678'),
                'phone_number' => '09234345566',
                'address' => 'Yangon',
            ],
            [
                'name' => 'Jinny',
                'email' => 'jinny@gmail.com',
                'is_tailor' => '1',
                'password' => bcrypt('12345678'),
                'phone_number' => '09254542255',
                'address' => 'Yangon',
            ],
        ];

        foreach($user as $key => $value) {
            User::create($value);
        }
    }
}

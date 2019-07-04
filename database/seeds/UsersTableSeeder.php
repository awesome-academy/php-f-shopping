<?php

use Illuminate\Database\Seeder;

// @codingStandardsIgnoreLine
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::raw('TRUNCATE TABLE users');

        $data = [
            0 => [
                'role_id' => '1',
                'name' => 'Khánh Hoàng',
                'email' => 'anhkhanh220596@gmail.com',
                'phone' => 1234567890,
                'address' => 'Hà Nội',
                'password' => \Hash::make('12345678'),
                'active' => 1,
                'token' => null
            ]
        ];

        foreach ($data as $key => $value) {
            \DB::table('users')->insert($value);
        }
    }
}

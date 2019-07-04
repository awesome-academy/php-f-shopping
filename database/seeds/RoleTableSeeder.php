<?php

use Illuminate\Database\Seeder;

// @codingStandardsIgnoreLine
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::raw('TRUNCATE TABLE roles');

        $data = [
            0 => [
                'name' => 'Admin',
                'created_at' => now(),
                'updated_at' => now()
            ],

            1 => [
                'name' => 'Manager',
                'created_at' => now(),
                'updated_at' => now()
            ],

            2 => [
                'name' => 'Super Admin',
                'created_at' => now(),
                'updated_at' => now()
            ],

            3 => [
                'name' => 'HR ( Human Resource )',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($data as $key => $value) {
            DB::table('roles')->insert($value);
        }
    }
}

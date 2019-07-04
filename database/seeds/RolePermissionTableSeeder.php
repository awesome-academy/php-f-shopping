<?php

use Illuminate\Database\Seeder;

// @codingStandardsIgnoreLine
class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::raw('TRUNCATE TABLE role_permissions');

        $data = [
            0 => [
                'role_id'=> '2',
                'permission_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],

            1 => [
                'role_id'=> '2',
                'permission_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],

            2 => [
                'role_id'=> '2',
                'permission_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ],

            3 => [
                'role_id'=> '3',
                'permission_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],

            4 => [
                'role_id'=> '4',
                'permission_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ],

            5 => [
                'role_id'=> '4',
                'permission_id' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($data as $key => $value) {
            DB::table('role_permissions')->insert($value);
        }
    }
}

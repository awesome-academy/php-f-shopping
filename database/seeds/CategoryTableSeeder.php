<?php

use Illuminate\Database\Seeder;

// @codingStandardsIgnoreLine
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::raw('TRUNCATE TABLE categories');

        $data = [
            0 => [
                'user_id' => 1,
                'name' => 'Bánh Cookies',
                'created_at' => now(),
                'updated_at' => now()
            ],

            1 => [
                'user_id' => 1,
                'name' => 'Bánh Lạnh',
                'created_at' => now(),
                'updated_at' => now()
            ],

            2 => [
                'user_id' => 1,
                'name' => 'Bánh Kem',
                'created_at' => now(),
                'updated_at' => now()
            ],

            3 => [
                'user_id' => 1,
                'name' => 'Bánh Nướng',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($data as $key => $value) {
            DB::table('categories')->insert($value);
        }
    }
}

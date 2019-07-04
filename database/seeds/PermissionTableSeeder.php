<?php

use Illuminate\Database\Seeder;

// @codingStandardsIgnoreLine
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::raw('TRUNCATE TABLE permissions');

        $data = [
            0 => [
                'title'=> 'Bạn có quyền xem sản phẩm',
                'name' => 'view-product',
                'created_at' => now(),
                'updated_at' => now()
            ],

            1 => [
                'title'=> 'Bạn có quyền xem công thức làm bánh',
                'name' => 'view-recipe',
                'created_at' => now(),
                'updated_at' => now()
            ],

            2 => [
                'title'=> 'Bạn có quyền xem danh mục sản phẩm',
                'name' => 'view-category',
                'created_at' => now(),
                'updated_at' => now()
            ],

            3 => [
                'title'=> 'Bạn có quyền xem đơn hàng',
                'name' => 'view-order',
                'created_at' => now(),
                'updated_at' => now()
            ],

            4 => [
                'title'=> 'Bạn có quyền xem thông tin khách hàng',
                'name' => 'view-customer',
                'created_at' => now(),
                'updated_at' => now()
            ],

            5 => [
                'title'=> 'Bạn có quyền xem thông tin liên hệ khách hàng',
                'name' => 'view-contact',
                'created_at' => now(),
                'updated_at' => now()
            ],

            6 => [
                'title'=> 'Bạn có quyền xem thông tin user',
                'name' => 'view-user',
                'created_at' => now(),
                'updated_at' => now()
            ],

            7 => [
                'title'=> 'Bạn có quyền xem thông tin quyền',
                'name' => 'view-role',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($data as $key => $value) {
            DB::table('permissions')->insert($value);
        }
    }
}

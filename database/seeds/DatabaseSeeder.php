<?php

use Illuminate\Database\Seeder;

// @codingStandardsIgnoreLine
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
            CategoryTableSeeder::class,
            RoleTableSeeder::class,
            PermissionTableSeeder::class,
            RolePermissionTableSeeder::class,
            UsersTableSeeder::class
            ]
        );
    }
}

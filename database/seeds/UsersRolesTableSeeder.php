<?php

use Illuminate\Database\Seeder;

class UsersRolesTableSeeder extends Seeder
{
    /**
     * Run the database seed
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_roles')->insert([
            'user_id' => 1,
            'role_id' => 1
        ]);

        DB::table('users_roles')->insert([
            'user_id' => 1,
            'role_id' => 2
        ]);

        DB::table('users_roles')->insert([
            'user_id' => 1,
            'role_id' => 3
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'  => 'Peter Walsh',
            'email' => 'peter@perceptiveweb.solutions',
            'password' => Hash::make('rgb526vhd090')
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class SourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table('source')->insert([
            'name' => 'HobbyLink Japan',
            'url'  => 'hlj.com'
        ]);
    }
}

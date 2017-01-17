<?php

use Illuminate\Database\Seeder;

class FactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('faction')->insert([
            'name'  => 'Earth Federation'
        ]);

        //2
        DB::table('faction')->insert([
            'name'  => 'The Principality of Zeon'
        ]);

        //3
        DB::table('faction')->insert([
            'name'  => 'Titans'
        ]);

        //4
        DB::table('faction')->insert([
            'name'  => 'Axis Zeon'
        ]);

        //5
        DB::table('faction')->insert([
            'name'  => 'Neo Zeon'
        ]);

        //6
        DB::table('faction')->insert([
            'name'  => 'The Sleeves'
        ]);

        
    }
}

<?php

use Illuminate\Database\Seeder;

class TimelineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('timeline')->insert([
            'name' => 'Universal Century',
            'abbreviation' => 'UC'
        ]);

        //2
        DB::table('timeline')->insert([
            'name' => 'Future Century',
            'abbreviation' => 'FC'
        ]);

        //3
        DB::table('timeline')->insert([
            'name' => 'Correct Century',
            'abbreviation' => 'CC'
        ]);

        //4
        DB::table('timeline')->insert([
            'name' => 'After Colony',
            'abbreviation' => 'AC'
        ]);

        //5
        DB::table('timeline')->insert([
            'name' => 'After War',
            'abbreviation' => 'AW'
        ]);

        //6
        DB::table('timeline')->insert([
            'name' => 'Cosmic Era',
            'abbreviation' => 'CE'
        ]);

        //7
        DB::table('timeline')->insert([
            'name' => 'Anno Domini',
            'abbreviation' => 'AD'
        ]);

        //8
        DB::table('timeline')->insert([
            'name' => 'Advanced Generation',
            'abbreviation' => 'AG'
        ]);

        //9
        DB::table('timeline')->insert([
            'name' => 'Regild Century',
            'abbreviation' => 'RC'
        ]);

        //10
        DB::table('timeline')->insert([
            'name' => 'Post Disaster',
            'abbreviation' => 'PD'
        ]);

        //11
        DB::table('timeline')->insert([
            'name' => 'Anno Domini (BF)',
            'abbreviation' => 'AD (BF)'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class ScaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scale')->insert([
            'scale' => 'SD'
        ]);

        DB::table('scale')->insert([
            'scale' => '1/144'
        ]);

        DB::table('scale')->insert([
            'scale' => '1/100'
        ]);

        DB::table('scale')->insert([
            'scale' => '1/60'
        ]);

        DB::table('scale')->insert([
            'scale' => '1/48'
        ]);

        DB::table('scale')->insert([
            'scale' => '1/35'
        ]);

        DB::table('scale')->insert([
            'scale' => '1/1200'
        ]);

        DB::table('scale')->insert([
            'scale' => '1/2400'
        ]);

        DB::table('scale')->insert([
            'scale' => '1/250'
        ]);

        DB::table('scale')->insert([
            'scale' => '1/550'
        ]);

        DB::table('scale')->insert([
            'scale' => '1/72'
        ]);

        DB::table('scale')->insert([
            'scale' => '1/220'
        ]);

        DB::table('scale')->insert([
            'scale' => '1/300'
        ]);

        DB::table('scale')->insert([
            'scale' => '1/1700'
        ]);

        DB::table('scale')->insert([
            'scale' => '1/2200'
        ]);
    }
}

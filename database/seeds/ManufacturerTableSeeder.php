<?php

use Illuminate\Database\Seeder;

class ManufacturerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('manufacturer')->insert([
            'name'  => 'Earth Federation Forces',
            'abbreviation' => 'EFF'
        ]);

        //2
        DB::table('manufacturer')->insert([
            'name'  => 'Zeonic',
            'abbreviation' => ''
        ]);

        //3
        DB::table('manufacturer')->insert([
            'name'  => 'Zimmad',
            'abbreviation' => ''
        ]);

        //4
        DB::table('manufacturer')->insert([
            'name'  => 'Anaheim Electronics',
            'abbreviation' => 'AE'
        ]);

        //5
        DB::table('manufacturer')->insert([
            'name'  => 'Strategic Naval Research Institute',
            'abbreviation' => 'SNRI'
        ]);

        //6
        DB::table('manufacturer')->insert([
            'name'  => 'Buch Concern',
            'abbreviation' => ''
        ]);

        //7
        DB::table('manufacturer')->insert([
            'name'  => 'Titans',
            'abbreviation' => ''
        ]);

        //8
        DB::table('manufacturer')->insert([
            'name' => 'Paptimus Scirocco',
            'abbreviation' => ''
        ]);

        //9
        DB::table('manufacturer')->insert([
            'name' => 'Murasame Research Institute',
            'abbreviation' => ''
        ]);

        //10
        DB::table('manufacturer')->insert([
            'name' => 'Karaba',
            'abbreviation' => ''
        ]);

        //11
        DB::table('manufacturer')->insert([
            'name' => 'Axis',
            'abbreviation' => ''
        ]);

        //12
        DB::table('manufacturer')->insert([
            'name' => 'Neo Zeon',
            'abbreviation' => ''
        ]);

        //13
        DB::table('manufacturer')->insert([
            'name' => 'Principality of Zeon',
            'abbreviation' => ''
        ]);

        //14
        DB::table('manufacturer')->insert([
            'name' => 'Konpeitoh Arsenal',
            'abbreviation' => ''
        ]);

        //15
        DB::table('manufacturer')->insert([
            'name' => 'United Nations Earth',
            'abbreviation' => 'UNE'
        ]);

        //16
        DB::table('manufacturer')->insert([
            'name' => 'Neo Japan',
            'abbreviation' => 'UNE'
        ]);

        //17
        DB::table('manufacturer')->insert([
            'name' => 'Vulture',
            'abbreviation' => ''
        ]);

        //18
        DB::table('manufacturer')->insert([
            'name' => 'Neo Sweden',
            'abbreviation' => ''
        ]);

        //19
        DB::table('manufacturer')->insert([
            'name' => 'Neo Hong Kong',
            'abbreviation' => ''
        ]);

        //20
        DB::table('manufacturer')->insert([
            'name' => 'Delaz Fleet',
            'abbreviation' => ''
        ]);

        //21
        DB::table('manufacturer')->insert([
            'name' => 'Barton Foundation',
            'abbreviation' => ''
        ]);

        //22
        DB::table('manufacturer')->insert([
            'name' => 'New United Nations Earth',
            'abbreviation' => 'NUNE'
        ]);

        //23
        DB::table('manufacturer')->insert([
            'name' => 'League Militaire',
            'abbreviation' => ''
        ]);

        //24
        DB::table('manufacturer')->insert([
            'name' => 'Morgenroete',
            'abbreviation' => ''
        ]);

        //25
        DB::table('manufacturer')->insert([
            'name' => 'Winner Corporation',
            'abbreviation' => ''
        ]);

        //26
        DB::table('manufacturer')->insert([
            'name' => 'Unknown',
            'abbreviation' => ''
        ]);

        //27
        DB::table('manufacturer')->insert([
            'name' => 'Integrated Design Bureau',
            'abbreviation' => 'IDB'
        ]);

        //28
        DB::table('manufacturer')->insert([
            'name' => 'A Bao A Qu Mobile Suit Factory',
            'abbreviation' => ''
        ]);

        //29
        DB::table('manufacturer')->insert([
            'name' => 'Neo Germany',
            'abbreviation' => ''
        ]);

        //30
        DB::table('manufacturer')->insert([
            'name' => 'Actaeon Industries',
            'abbreviation' => ''
        ]);

        //31
        DB::table('manufacturer')->insert([
            'name' => 'Terminal',
            'abbreviation' => ''
        ]);

        //32
        DB::table('manufacturer')->insert([
            'name' => 'ZAFT',
            'abbreviation' => ''
        ]);

        //33
        DB::table('manufacturer')->insert([
            'name' => 'Krung Thep',
            'abbreviation' => ''
        ]);

        //34
        DB::table('manufacturer')->insert([
            'name' => 'Linear Train Industries',
            'abbreviation' => ''
        ]);

        //35
        DB::table('manufacturer')->insert([
            'name' => 'Celestial Being',
            'abbreviation' => ''
        ]);

        //36
        DB::table('manufacturer')->insert([
            'name' => 'Earth Federation Forces (AGE)',
            'abbreviation' => ''
        ]);

        //37
        DB::table('manufacturer')->insert([
            'name' => 'Sei Iori',
            'abbreviation' => ''
        ]);

        //38
        DB::table('manufacturer')->insert([
            'name' => 'Meijin Kawaguchi',
            'abbreviation' => ''
        ]);
    }
}

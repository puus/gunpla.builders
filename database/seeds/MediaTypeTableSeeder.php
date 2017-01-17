<?php

use Illuminate\Database\Seeder;

class MediaTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('media_type')->insert([
            'name' => 'TV Series'
        ]);

        //2
        DB::table('media_type')->insert([
            'name' => 'OVA'
        ]);

        //3
        DB::table('media_type')->insert([
            'name' => 'Movie'
        ]);

        //4
        DB::table('media_type')->insert([
            'name' => 'Manga'
        ]);

        //5
        DB::table('media_type')->insert([
            'name' => 'Novel'
        ]);

        //6
        DB::table('media_type')->insert([
            'name' => 'Radio Drama'
        ]);

        //7
        DB::table('media_type')->insert([
            'name' => 'Game'
        ]);

        //8
        DB::table('media_type')->insert([
            'name' => 'Photo Novel'
        ]);
    }
}

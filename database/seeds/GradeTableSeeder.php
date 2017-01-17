<?php

use Illuminate\Database\Seeder;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grade')->insert([
            'name'  => 'Super Deformed'
        ]);

        DB::table('grade')->insert([
            'name'  => 'High Grade'
        ]);

        DB::table('grade')->insert([
            'name'  => 'Master Grade'
        ]);

        DB::table('grade')->insert([
            'name'  => 'Perfect Grade'
        ]);

        DB::table('grade')->insert([
            'name'  => 'Mega Size Model'
        ]);

        DB::table('grade')->insert([
            'name'  => 'HardGraph'
        ]);
    }
}

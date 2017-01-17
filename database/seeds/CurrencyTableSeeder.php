<?php

use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('currency')->insert([
            'name'  => 'USD',
            'rate'  => 1.0
        ]);
    }
}

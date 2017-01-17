<?php

use Illuminate\Database\Seeder;

class MobileSuitVariationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table('mobile_suit_variation')->insert([
            'name'  => 'Zeta Plus A3',
            'model' => 'MSZ-006A3',
            'mobile_suit_fk' => 34,
            'manufacturer_fk' => 4
        ]);

        // 2
        DB::table('mobile_suit_variation')->insert([
            'name'  => 'Zeta Plus E',
            'model' => 'MSZ-006E',
            'mobile_suit_fk' => 34,
            'manufacturer_fk' => 4
        ]);

        // 3
        DB::table('mobile_suit_variation')->insert([
            'name'  => 'Zeta Plus A1B',
            'model' => 'MSZ-006AIB',
            'mobile_suit_fk' => 34,
            'manufacturer_fk' => 4
        ]);

        // 4
        DB::table('mobile_suit_variation')->insert([
            'name'  => 'Zeta Plus R',
            'model' => 'MSZ-006R',
            'mobile_suit_fk' => 34,
            'manufacturer_fk' => 4
        ]);

        // 5
        DB::table('mobile_suit_variation')->insert([
            'name'  => 'Zeta Plus BN',
            'model' => 'MSZ-006BN',
            'mobile_suit_fk' => 34,
            'manufacturer_fk' => 4
        ]);

        // 6
        DB::table('mobile_suit_variation')->insert([
            'name'  => 'Zeta Plus C4',
            'model' => 'MSZ-006C4',
            'mobile_suit_fk' => 34,
            'manufacturer_fk' => 4
        ]);

        // 7
        DB::table('mobile_suit_variation')->insert([
            'name'  => 'Zeta Plus A1',
            'model' => 'MSZ-006A1',
            'mobile_suit_fk' => 34,
            'manufacturer_fk' => 4
        ]);

        // 8
        DB::table('mobile_suit_variation')->insert([
            'name'  => 'Zeta Plus D',
            'model' => 'MSZ-006D',
            'mobile_suit_fk' => 34,
            'manufacturer_fk' => 4
        ]);

        // 9
        DB::table('mobile_suit_variation')->insert([
            'name'  => 'Zeta Plus C1',
            'model' => 'MSZ-006C1[Bst]',
            'mobile_suit_fk' => 34,
            'manufacturer_fk' => 4
        ]);

        // 10
        DB::table('mobile_suit_variation')->insert([
            'name'  => 'Zaku II Commander Type',
            'model' => 'MS-06S',
            'mobile_suit_fk' => 5,
            'manufacturer_fk' => 2
        ]);

        // 10
        DB::table('mobile_suit_variation')->insert([
            'name'  => 'Zaku II First Mass Production Type',
            'model' => 'MS-06A',
            'mobile_suit_fk' => 5,
            'manufacturer_fk' => 2
        ]);
    }
}

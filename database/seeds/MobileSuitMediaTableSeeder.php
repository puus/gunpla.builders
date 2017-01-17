<?php

use Illuminate\Database\Seeder;

class MobileSuitMediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Gundam
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk'  => 1,
            'media_fk' => 2
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk'  => 1,
            'media_fk' => 29
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk'  => 1,
            'media_fk' => 30
        ]);

        // Guncannon
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 2,
            'media_fk' => 2
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 2,
            'media_fk' => 8
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 2,
            'media_fk' => 29
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 2,
            'media_fk' => 30
        ]);

        // Guntank
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 3,
            'media_fk' => 2
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 3,
            'media_fk' => 30
        ]);

        //GM
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 4,
            'media_fk' => 2
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 4,
            'media_fk' => 6
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 4,
            'media_fk' => 4
        ]);

        // Zaku II
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 5,
            'media_fk' => 2
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 5,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 5,
            'media_fk' => 3
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 5,
            'media_fk' => 4
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 5,
            'media_fk' => 11
        ]);

        // Gouf
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 6,
            'media_fk' => 2
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 6,
            'media_fk' => 29
        ]);

        // Dom
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 7,
            'media_fk' => 2
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 7,
            'media_fk' => 29
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 7,
            'media_fk' => 30
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 7,
            'media_fk' => 3
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 7,
            'media_fk' => 4
        ]);

        // Z'Gok
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 8,
            'media_fk' => 2
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 8,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 8,
            'media_fk' => 29
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 8,
            'media_fk' => 30
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 8,
            'media_fk' => 11
        ]);

        // Zeong
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 9,
            'media_fk' => 2
        ]);

        // Gelgoog
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 10,
            'media_fk' => 2
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 10,
            'media_fk' => 8
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 10,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 10,
            'media_fk' => 3
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 10,
            'media_fk' => 6
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 10,
            'media_fk' => 11
        ]);

        // Gogg
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 11,
            'media_fk' => 2
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 11,
            'media_fk' => 30
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 11,
            'media_fk' => 3
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 11,
            'media_fk' => 9
        ]);

        // Gyan
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 12,
            'media_fk' => 2
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 12,
            'media_fk' => 29
        ]);

        // Acguy
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 13,
            'media_fk' => 2
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 13,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 13,
            'media_fk' => 30
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 13,
            'media_fk' => 3
        ]);

        // Zock
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 14,
            'media_fk' => 2
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 14,
            'media_fk' => 29
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 14,
            'media_fk' => 30
        ]);

        // Ball
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 15,
            'media_fk' => 2
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 15,
            'media_fk' => 29
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 15,
            'media_fk' => 4
        ]);

        // Big Zam
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 16,
            'media_fk' => 2
        ]);

        // Bigro
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 17,
            'media_fk' => 2
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 17,
            'media_fk' => 4
        ]);

        // Grublo
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 18,
            'media_fk' => 2
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 18,
            'media_fk' => 7
        ]);

        // Elmeth
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 19,
            'media_fk' => 2
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 19,
            'media_fk' => 30
        ]);

        // Zaku I
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 20,
            'media_fk' => 2
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 20,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 20,
            'media_fk' => 29
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 20,
            'media_fk' => 30
        ]);

        // Adzam
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 21,
            'media_fk' => 2
        ]);

        // Zakrello
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 22,
            'media_fk' => 2
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 22,
            'media_fk' => 28
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 22,
            'media_fk' => 29
        ]);

        // Braw Bro
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 23,
            'media_fk' => 2
        ]);

        // Agguguy
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 24,
            'media_fk' => 9
        ]);

        // Juaggu
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 25,
            'media_fk' => 11
        ]);

        // Agg
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 26,
            'media_fk' => 29
        ]);

        // Zogok
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 27,
            'media_fk' => 11
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 27,
            'media_fk' => 9
        ]);

        // Gundam Mk-II
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 28,
            'media_fk' => 8
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 28,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 28,
            'media_fk' => 30
        ]);

        // Hizack
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 29,
            'media_fk' => 8
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 29,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 29,
            'media_fk' => 30
        ]);

        // Rick Dias
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 30,
            'media_fk' => 8
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 30,
            'media_fk' => 29
        ]);

        // Galbaldy β
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 31,
            'media_fk' => 8
        ]);

        // Zaku Tank
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 32,
            'media_fk' => 8
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 32,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 32,
            'media_fk' => 29
        ]);

        // Marasai
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 33,
            'media_fk' => 8
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 33,
            'media_fk' => 29
        ]);

        // Zeta Gundam
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 34,
            'media_fk' => 8
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 34,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 34,
            'media_fk' => 30
        ]);

        // GM-II
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 35,
            'media_fk' => 8
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 35,
            'media_fk' => 9
        ]);

        // Nemo
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 36,
            'media_fk' => 8
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 36,
            'media_fk' => 9
        ]);

        // Messala
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 37,
            'media_fk' => 8
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 37,
            'media_fk' => 29
        ]);

        // Gaplant
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 38,
            'media_fk' => 8
        ]);

        // Asshimar
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 39,
            'media_fk' => 8
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 39,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 39,
            'media_fk' => 28
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 39,
            'media_fk' => 29
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 39,
            'media_fk' => 30
        ]);

        // Psyco Gundam
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 40,
            'media_fk' => 8
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 40,
            'media_fk' => 29
        ]);

        // Gabthley
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 41,
            'media_fk' => 8
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 41,
            'media_fk' => 29
        ]);

        // Methuss
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 42,
            'media_fk' => 8
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 42,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 42,
            'media_fk' => 29
        ]);

        // Hambrabi
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 43,
            'media_fk' => 8
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 43,
            'media_fk' => 29
        ]);

        // Palace Athene
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 44,
            'media_fk' => 8
        ]);

        // Hyaku Shiki
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 45,
            'media_fk' => 8
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 45,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 45,
            'media_fk' => 29
        ]);

        // Dijeh
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 46,
            'media_fk' => 8
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 46,
            'media_fk' => 29
        ]);

        // Qubeley
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 47,
            'media_fk' => 8
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 47,
            'media_fk' => 9
        ]);

        // Byarlant
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 48,
            'media_fk' => 8
        ]);

        // Psyco Gundam Mk-II
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 49,
            'media_fk' => 8
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 49,
            'media_fk' => 9
        ]);

        // Gaza-D
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 50,
            'media_fk' => 9
        ]);

        // Galluss-J
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 51,
            'media_fk' => 9
        ]);

        // Zssa
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 52,
            'media_fk' => 9
        ]);

        // ZZ Gundam
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 53,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 53,
            'media_fk' => 29
        ]);

        // R-Jarja
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 54,
            'media_fk' => 9
        ]);

        // Hamma Hamma
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 55,
            'media_fk' => 9
        ]);

        // Ga-Zowmn
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 56,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 56,
            'media_fk' => 11
        ]);

        // Dowadge
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 57,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 57,
            'media_fk' => 29
        ]);

        // Bawoo
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 58,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 58,
            'media_fk' => 29
        ]);

        // Gazu-R
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 59,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 59,
            'media_fk' => 29
        ]);

        // Gazu-L
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 60,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 60,
            'media_fk' => 29
        ]);

        // ReGelgu
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 61,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 61,
            'media_fk' => 30
        ]);

        // EWAC Zack
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 62,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 62,
            'media_fk' => 11
        ]);

        // Dreissen
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 63,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 63,
            'media_fk' => 29
        ]);

        // Doven Wolf
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 64,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 64,
            'media_fk' => 30
        ]);

        // Jamru Fin
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 65,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 65,
            'media_fk' => 29
        ]);

        // Zaku III
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 66,
            'media_fk' => 9
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 66,
            'media_fk' => 30
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 66,
            'media_fk' => 11
        ]);

        // S-Gundam
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 67,
            'media_fk' => 29
        ]);

        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 67,
            'media_fk' => 34
        ]);

        // Gundam F90
        DB::table('mobile_suit_media')->insert([
            'mobile_suit_fk' => 68,
            'media_fk' => 34
        ]);
    }
}

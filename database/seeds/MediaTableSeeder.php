<?php

use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam The Origin',
            'short_name' => 'The Origin',
            'abbreviation' => '',
            'year' => '0068',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 2
        ]);

        //2
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam',
            'short_name' => 'First Gundam',
            'abbreviation' => 'MSG',
            'year' => '0079',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 1
        ]);

        //3
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam The 08th MS Team',
            'short_name' => 'The 08th MS Team',
            'abbreviation' => '',
            'year' => '0079',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 2
        ]);

        //4
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam MS IGLOO: Apocalypse 0079',
            'short_name' => 'MS IGLOO',
            'abbreviation' => '',
            'year' => '0079',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 2
        ]);

        //5
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam 0080: War in the Pocket',
            'short_name' => 'War in the Pocket',
            'abbreviation' => '0080',
            'year' => '0080',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 2
        ]);

        //6
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam 0083: Stardust Memories',
            'short_name' => 'Stardust Memories',
            'abbreviation' => '0083',
            'year' => '0082',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 2
        ]);

        //7
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam Thunderbolt',
            'short_name' => 'Thunderbolt',
            'abbreviation' => '',
            'year' => '0079',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 2
        ]);

        //8
        DB::table('media')->insert([
            'name' => 'Mobile Suit Zeta Gundam',
            'short_name' => 'Zeta Gundam',
            'abbreviation' => 'Z',
            'year' => '0087',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 1
        ]);

        //9
        DB::table('media')->insert([
            'name' => 'Mobile Suit ZZ Gundam',
            'short_name' => 'ZZ Gundam',
            'abbreviation' => 'ZZ',
            'year' => '0089',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 1
        ]);

        //10
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam: Char\'s Counterattack',
            'short_name' => 'Char\'s Counterattack',
            'abbreviation' => 'CCA',
            'year' => '0093',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 3
        ]);

        //11
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam Unicorn',
            'short_name' => 'Unicorn',
            'abbreviation' => 'MSGU',
            'year' => '0096',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 2
        ]);

        //12
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam F91',
            'short_name' => 'Gundam F91',
            'abbreviation' => 'F91',
            'year' => '0123',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 3
        ]);

        //13
        DB::table('media')->insert([
            'name' => 'Mobile Suit Crossbone Gundam',
            'short_name' => 'Crossbone',
            'abbreviation' => 'MSG',
            'year' => '0133',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //14
        DB::table('media')->insert([
            'name' => 'Mobile Suit Victory Gundam',
            'short_name' => 'Victory Gundam',
            'abbreviation' => 'MSVG',
            'year' => '0153',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 1
        ]);

        //15
        DB::table('media')->insert([
            'name' => 'Gaia Gear',
            'short_name' => '',
            'abbreviation' => '',
            'year' => '0203',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 5
        ]);

        //16
        DB::table('media')->insert([
            'name' => 'G-Saviour',
            'short_name' => '',
            'abbreviation' => '',
            'year' => '0223',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 3
        ]);

        //17
        DB::table('media')->insert([
            'name' => 'Mobile Fighter G Gundam',
            'short_name' => 'G Gundam',
            'abbreviation' => '',
            'year' => '60',
            'timeline_fk' => 2,
            'media_type_fk' => 1
        ]);

        //18
        DB::table('media')->insert([
            'name' => 'New Mobile Report Gundam Wing',
            'short_name' => 'Gundam Wing',
            'abbreviation' => 'GW',
            'year' => '195',
            'timeline_fk' => 4,
            'media_type_fk' => 1
        ]);

        //19
        DB::table('media')->insert([
            'name' => 'New Mobile Report Gundam Wing: Endless Waltz',
            'short_name' => 'Endless Waltz',
            'abbreviation' => 'EW',
            'year' => '196',
            'timeline_fk' => 4,
            'media_type_fk' => 2
        ]);

        //20
        DB::table('media')->insert([
            'name' => 'New Mobile Report Gundam Wing: Frozen Teardrop',
            'short_name' => 'Frozen Teardrop',
            'abbreviation' => 'FT',
            'year' => '195',
            'timeline_fk' => 4,
            'media_type_fk' => 5
        ]);

        //21
        DB::table('media')->insert([
            'name' => 'After War Gundam X',
            'short_name' => 'Gundam X',
            'abbreviation' => '',
            'year' => '0015',
            'timeline_fk' => 5,
            'media_type_fk' => 1
        ]);

        //22
        DB::table('media')->insert([
            'name' => 'Turn A Gundam',
            'short_name' => '',
            'abbreviation' => '',
            'year' => '2345',
            'timeline_fk' => 3,
            'media_type_fk' => 1
        ]);

        //23
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam SEED',
            'short_name' => 'Gundam SEED',
            'abbreviation' => '',
            'year' => '71',
            'timeline_fk' => 6,
            'media_type_fk' => 1
        ]);

        //24
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam SEED Destiny',
            'short_name' => 'SEED Destiny',
            'abbreviation' => '',
            'year' => '73',
            'timeline_fk' => 6,
            'media_type_fk' => 1
        ]);

        //25
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam SEED C.E. 73: Stargazer',
            'short_name' => 'Stargazer',
            'abbreviation' => '',
            'year' => '73',
            'timeline_fk' => 6,
            'media_type_fk' => 2
        ]);

        //26
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam 00',
            'short_name' => 'Gundam 00',
            'abbreviation' => '00',
            'year' => '2312',
            'timeline_fk' => 7,
            'media_type_fk' => 1
        ]);

        //27
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam 00 the Movie: A Wakening of the Trailblazer',
            'short_name' => 'A Wakening of the Trailblazer',
            'abbreviation' => '',
            'year' => '2314',
            'timeline_fk' => 7,
            'media_type_fk' => 3
        ]);

        //28
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gunpla Builders Beginning G',
            'short_name' => 'Gunpla Builders',
            'abbreviation' => '',
            'year' => '2010',
            'timeline_fk' => 11,
            'media_type_fk' => 3
        ]);

        //29
        DB::table('media')->insert([
            'name' => 'Gundam Build Fighters',
            'short_name' => 'Build Fighters',
            'abbreviation' => '',
            'year' => '20??',
            'timeline_fk' => 11,
            'media_type_fk' => 1
        ]);

        //30
        DB::table('media')->insert([
            'name' => 'Gundam Build Fighters TRY',
            'short_name' => 'Build Fighters TRY',
            'abbreviation' => '',
            'year' => '20??',
            'timeline_fk' => 11,
            'media_type_fk' => 1
        ]);

        // Advanced Generation media
        //31
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam AGE',
            'short_name' => 'Gundam AGE',
            'abbreviation' => 'AGE',
            'year' => '140',
            'timeline_fk' => 8,
            'media_type_fk' => 1
        ]);

        //32
        DB::table('media')->insert([
            'name' => 'Gundam Reconguista in G',
            'short_name' => 'G Reco',
            'abbreviation' => 'Greco',
            'year' => '1014',
            'timeline_fk' => 9,
            'media_type_fk' => 1
        ]);

        //33
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam: Iron-Blooded Orphans',
            'short_name' => 'Iron Blooded Orphans',
            'abbreviation' => 'IBO',
            'year' => '323',
            'timeline_fk' => 10,
            'media_type_fk' => 1
        ]);

        //34
        DB::table('media')->insert([
            'name' => 'Gundam Sentinel',
            'short_name' => '',
            'abbreviation' => '',
            'year' => '0088',
            'timeline_fk' => 1,
            'media_type_fk' => 5
        ]);

        //35
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam MS IGLOO 2: The Gravity Front',
            'short_name' => 'MS IGLOO',
            'abbreviation' => '',
            'year' => '0079',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 2
        ]);

        //36
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam',
            'short_name' => 'Gundam',
            'abbreviation' => '',
            'year' => '0079',
            'timeline_fk' => 1,
            'media_type_fk' => 4
        ]);

        //37
        DB::table('media')->insert([
            'name' => 'Mobile Suit Variations',
            'short_name' => '',
            'abbreviation' => 'MSV',
            'year' => '0079',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 8
        ]);

        //38
        DB::table('media')->insert([
            'name' => 'Mobile Suit X',
            'short_name' => '',
            'abbreviation' => 'MSX',
            'year' => '0079',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 8
        ]);

        //39
        DB::table('media')->insert([
            'name' => 'Mobile Suit Discovery',
            'short_name' => '',
            'abbreviation' => 'MSD',
            'year' => '0079',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 8
        ]);

        //40
        DB::table('media')->insert([
            'name' => 'Zeta Gundam Mobile Suit Variations',
            'short_name' => '',
            'abbreviation' => 'Z-MSV',
            'year' => '0086',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 8
        ]);

        //41
        DB::table('media')->insert([
            'name' => 'Mobile Suit Variations',
            'short_name' => '',
            'abbreviation' => 'MSV',
            'year' => '0079',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 8
        ]);

        //42
        DB::table('media')->insert([
            'name' => 'Gundam ZZ Mobile Suit Variations',
            'short_name' => '',
            'abbreviation' => 'ZZ-MSV',
            'year' => '0088',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 8
        ]);

        //43
        DB::table('media')->insert([
            'name' => 'Char\'s Counterattack Mobile Suit Variations',
            'short_name' => '',
            'abbreviation' => 'CCA-MSV',
            'year' => '0093',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 8
        ]);

        //44
        DB::table('media')->insert([
            'name' => 'Kunio Okawara\'s MS Collection',
            'short_name' => '',
            'abbreviation' => 'M-MSV',
            'year' => '',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 8
        ]);

        //45
        DB::table('media')->insert([
            'name' => 'MSV90',
            'short_name' => '',
            'abbreviation' => '',
            'year' => '',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 8
        ]);

        //46
        DB::table('media')->insert([
            'name' => 'Gundam F91 Mobile Suit Variations',
            'short_name' => '',
            'abbreviation' => 'F91-MSV',
            'year' => '',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 8
        ]);

        //47
        DB::table('media')->insert([
            'name' => 'Victory Gundam Mobile Suit Variations',
            'short_name' => '',
            'abbreviation' => 'V-MSV',
            'year' => '',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 8
        ]);

        //48
        DB::table('media')->insert([
            'name' => 'MSV-R',
            'short_name' => '',
            'abbreviation' => '',
            'year' => '',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 8
        ]);

        //49
        DB::table('media')->insert([
            'name' => 'Gundam Unicorn Mobile Suit Variations',
            'short_name' => '',
            'abbreviation' => 'UC-MSV',
            'year' => '',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 8
        ]);

        //50
        DB::table('media')->insert([
            'name' => 'After War Gundam X Hyper Guide',
            'short_name' => '',
            'abbreviation' => '',
            'year' => '',
            'timeline_fk' => 5, //UC,
            'media_type_fk' => 8
        ]);

        //51
        DB::table('media')->insert([
            'name' => 'Gundam SEED Mobile Suit Variations',
            'short_name' => '',
            'abbreviation' => 'SEED-MSV',
            'year' => '',
            'timeline_fk' => 6, //UC,
            'media_type_fk' => 8
        ]);

        //52
        DB::table('media')->insert([
            'name' => 'Gundam SEED DESTINY Mobile Suit Variations',
            'short_name' => '',
            'abbreviation' => 'SEED DESTINY-MSV',
            'year' => '',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 8
        ]);

        //53
        DB::table('media')->insert([
            'name' => 'Games Mobile Suit Variations',
            'short_name' => '',
            'abbreviation' => 'GAMES MSV',
            'year' => '',
            'media_type_fk' => 8
        ]);

        //54
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam: Record of MS Wars',
            'short_name' => '',
            'abbreviation' => '',
            'year' => '0079',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //55
        DB::table('media')->insert([
            'name' => 'Mobile Suit Zeta Gundam',
            'short_name' => 'Zeta Gundam',
            'abbreviation' => '',
            'year' => '0086',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //56
        DB::table('media')->insert([
            'name' => 'Mobile Suit ZZ Gundam',
            'short_name' => 'ZZ Gundam',
            'abbreviation' => '',
            'year' => '0088',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //57
        DB::table('media')->insert([
            'name' => 'Zeta Gundam: Side Story',
            'short_name' => '',
            'abbreviation' => '',
            'year' => '0086',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //58
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam Char\'s Counterattack',
            'short_name' => 'Char\'s Counterattack',
            'abbreviation' => 'CCA',
            'year' => '0093',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //59
        DB::table('media')->insert([
            'name' => 'Stampede: The Story of Professor Minovsky',
            'short_name' => 'The Story of Professor Minovsky',
            'abbreviation' => '',
            'year' => '0080',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //60
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam: Outer Gundam',
            'short_name' => 'Outer Gundam',
            'abbreviation' => '',
            'year' => '0079',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //61
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam: Record of MS Wars II',
            'short_name' => 'Record of MS Wars II',
            'abbreviation' => '',
            'year' => '0079',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //62
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam: Record of MS Wars II',
            'short_name' => 'Record of MS Wars II',
            'abbreviation' => '',
            'year' => '0079 - 0093',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //63
        DB::table('media')->insert([
            'name' => 'Mobile Suit Vor!!',
            'short_name' => '',
            'abbreviation' => '',
            'year' => '0080',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //64
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam: The Revival of Zeon',
            'short_name' => 'The Revival of Zeon',
            'abbreviation' => '',
            'year' => '0092',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //65
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam MS Generation',
            'short_name' => 'MS Generation',
            'abbreviation' => '',
            'year' => '',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //66
        DB::table('media')->insert([
            'name' => 'Magical Ensign Blaster Mari',
            'short_name' => '',
            'abbreviation' => '',
            'year' => '0079',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //67
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam 0080 Visual Comic',
            'short_name' => '0080 Visual Comic',
            'abbreviation' => '',
            'year' => '0080',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //68
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam 0080: War in the Pocket',
            'short_name' => 'War in the Pocket',
            'abbreviation' => '',
            'year' => '0080',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //69
        DB::table('media')->insert([
            'name' => 'Jupiter Mirage',
            'short_name' => '',
            'abbreviation' => '',
            'year' => '',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //70
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam Program Master',
            'short_name' => 'Program Master',
            'abbreviation' => '',
            'year' => '',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //71
        DB::table('media')->insert([
            'name' => 'Gundam Sentinel: The Day Before',
            'short_name' => 'The Day Before',
            'abbreviation' => '',
            'year' => '',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //72
        DB::table('media')->insert([
            'name' => 'Double-Fake Under The Gundam',
            'short_name' => '',
            'abbreviation' => '',
            'year' => '0090',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //73
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam Almarya',
            'short_name' => 'Almarya',
            'abbreviation' => '',
            'year' => '0179',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //74
        DB::table('media')->insert([
            'name' => 'Operation Buran U.C. 0079',
            'short_name' => 'Operation Buran',
            'abbreviation' => '',
            'year' => '0079',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //75
        DB::table('media')->insert([
            'name' => 'PILLOW TALK GUNDAM NIGHT=HAWKS!',
            'short_name' => 'Night=Hawks!',
            'abbreviation' => '',
            'year' => '0079',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //76
        DB::table('media')->insert([
            'name' => 'Mobile Suit Vs. Giant God of Legend: Gigantis\' Counterattack',
            'short_name' => 'Gigantis\' Counterattack',
            'abbreviation' => '',
            'year' => '0090',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //77
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam F90',
            'short_name' => 'Gundam F90',
            'abbreviation' => '',
            'year' => '',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //78
        DB::table('media')->insert([
            'name' => 'Artificial Newtypes Story: Another Zeta Gundam Story',
            'short_name' => 'Another Zeta Gundam Story',
            'abbreviation' => '',
            'year' => '',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //79
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam F91: Formula Report 0122',
            'short_name' => 'Formula Report 0122',
            'abbreviation' => '',
            'year' => '0122',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //80
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam F91',
            'short_name' => 'Gundam F91',
            'abbreviation' => '',
            'year' => '0123',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //81
        DB::table('media')->insert([
            'name' => 'Go! Go! Our V-Gundam!!',
            'short_name' => '',
            'abbreviation' => '',
            'year' => '',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //82
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam 0083: Stardust Memory',
            'short_name' => 'Stardust Memory',
            'abbreviation' => '',
            'year' => '0083',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //83
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam Silhouette Formula 91',
            'short_name' => 'Silhouette Formula 91',
            'abbreviation' => '',
            'year' => '0122',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //84
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam 0084: Psi-trailing',
            'short_name' => 'Psi-trailing',
            'abbreviation' => '',
            'year' => '0084',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //85
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam ZZ: Seaside Panic',
            'short_name' => 'Seaside Panic',
            'abbreviation' => '',
            'year' => '',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //86
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam in UC 0099: Moon Crisis',
            'short_name' => 'Moon Crisis',
            'abbreviation' => '',
            'year' => '0099',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //87
        DB::table('media')->insert([
            'name' => 'Mobile Suit Victory Gundam',
            'short_name' => 'Victory Gundam',
            'abbreviation' => '',
            'year' => '0153',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //88
        DB::table('media')->insert([
            'name' => 'Mobile Suit Victory Gundam Outside Story',
            'short_name' => 'Victory Gundam',
            'abbreviation' => '',
            'year' => '',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //89
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam REON',
            'short_name' => 'Gundam REON',
            'abbreviation' => '',
            'year' => '107',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //90
        DB::table('media')->insert([
            'name' => 'Artificial Newtypes Story: Mad Wang 1160',
            'short_name' => 'Mad Wang 1160',
            'abbreviation' => '',
            'year' => '1160',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //91
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam Side Story: The Blue Destiny',
            'short_name' => 'The Blue Destiny',
            'abbreviation' => '',
            'year' => '',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //92
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam 0083: Hero of Stardust',
            'short_name' => 'Hero of Stardust',
            'abbreviation' => '',
            'year' => '0083',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //93
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam: Char\'s Deleted Affair: Portrait Of Young Comet',
            'short_name' => 'Char\'s Deleted Affair',
            'abbreviation' => 'CDA',
            'year' => '0080',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //94
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam: The Origin',
            'short_name' => 'The Origin',
            'abbreviation' => '',
            'year' => '0079',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //95
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam: Lost War Chronicles',
            'short_name' => 'Lost War Chronicles',
            'abbreviation' => '',
            'year' => '0079',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //96
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam École du Ciel',
            'short_name' => 'École du Ciel',
            'abbreviation' => '',
            'year' => '0085',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //97
        DB::table('media')->insert([
            'name' => 'Mobile Suit Gundam Side Story: Space, To the End of a Flash',
            'short_name' => 'Space, to the End of a Flash',
            'abbreviation' => '',
            'year' => '',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //98
        DB::table('media')->insert([
            'name' => 'Developers - Mobile Suit Gundam Before One Year War',
            'short_name' => 'Before the One Year War',
            'abbreviation' => '',
            'year' => '',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //99
        DB::table('media')->insert([
            'name' => 'Mobile Suit Crossbone Gundam: Skull Heart',
            'short_name' => 'Skull Heart',
            'abbreviation' => '',
            'year' => '0133 - 0136',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //100
        DB::table('media')->insert([
            'name' => 'Mobile Suit Zeta Gundam: Day After Tomorrow - From Kai Shiden\'s Report',
            'short_name' => 'Day After Tomorrow - From Kai Shiden\'s Report',
            'abbreviation' => '',
            'year' => '',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);

        //101
        DB::table('media')->insert([
            'name' => 'Mobile Suit Crossbone Gundam: Steel 7',
            'short_name' => 'Steel 7',
            'abbreviation' => '',
            'year' => '0136',
            'timeline_fk' => 1, //UC,
            'media_type_fk' => 4
        ]);


    }
}

<?php

use Illuminate\Database\Seeder;

class MobileSuitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam',
            'model' => 'RX-78-2',
            'manufacturer_fk' => 1
        ]);

        //2
        DB::table('mobile_suit')->insert([
            'name'  => 'Guncannon',
            'model' => 'RX-77',
            'manufacturer_fk' => 1
        ]);

        //3
        DB::table('mobile_suit')->insert([
            'name'  => 'Guntank',
            'model' => 'RX-75',
            'manufacturer_fk' => 1
        ]);

        //4
        DB::table('mobile_suit')->insert([
            'name'  => 'GM',
            'model' => 'RGM-79',
            'manufacturer_fk' => 1
        ]);

        //5
        DB::table('mobile_suit')->insert([
            'name'  => 'Zaku II',
            'model' => 'MS-06',
            'manufacturer_fk' => 2
        ]);

        // 6
        DB::table('mobile_suit')->insert([
            'name'  => 'Gouf',
            'model' => 'MS-07',
            'manufacturer_fk' => 2
        ]);

        // 7
        DB::table('mobile_suit')->insert([
            'name'  => 'Dom',
            'model' => 'MS-09',
            'manufacturer_fk' => 2
        ]);

        // 8
        DB::table('mobile_suit')->insert([
            'name'  => 'Z\'Gok',
            'model' => 'MSM-07',
            'manufacturer_fk' => 2
        ]);

        // 9
        DB::table('mobile_suit')->insert([
            'name'  => 'Zeong',
            'model' => 'MSN-02',
            'manufacturer_fk' => 2
        ]);

        // 10
        DB::table('mobile_suit')->insert([
            'name'  => 'Gelgoog',
            'model' => 'MS-14',
            'manufacturer_fk' => 2
        ]);

        // 11
        DB::table('mobile_suit')->insert([
            'name'  => 'Gogg',
            'model' => 'MSM-03',
            'manufacturer_fk' => 2
        ]);

        // 12
        DB::table('mobile_suit')->insert([
            'name'  => 'Gyan',
            'model' => 'MS-15',
            'manufacturer_fk' => 2
        ]);

        // 13
        DB::table('mobile_suit')->insert([
            'name'  => 'Acguy',
            'model' => 'MSM-04',
            'manufacturer_fk' => 2
        ]);

        // 14
        DB::table('mobile_suit')->insert([
            'name'  => 'Zock',
            'model' => 'MSM-10',
            'manufacturer_fk' => 2
        ]);

        // 15
        DB::table('mobile_suit')->insert([
            'name'  => 'Ball',
            'model' => 'RB-79',
            'manufacturer_fk' => 1
        ]);

        // 16
        DB::table('mobile_suit')->insert([
            'name'  => 'Big Zam',
            'model' => 'MA-08',
            'manufacturer_fk' => 2
        ]);

        // 17
        DB::table('mobile_suit')->insert([
            'name'  => 'Bigro',
            'model' => 'MA-05',
            'manufacturer_fk' => 2
        ]);

        // 18
        DB::table('mobile_suit')->insert([
            'name'  => 'Grublo',
            'model' => 'MAM-07',
            'manufacturer_fk' => 2
        ]);

        // 19
        DB::table('mobile_suit')->insert([
            'name'  => 'Elmeth',
            'model' => 'MAN-08',
            'manufacturer_fk' => 2
        ]);

        // 20
        DB::table('mobile_suit')->insert([
            'name'  => 'Zaku I',
            'model' => 'MS-05',
            'manufacturer_fk' => 2
        ]);

        // 21
        DB::table('mobile_suit')->insert([
            'name'  => 'Adzam',
            'model' => 'MAX-03',
            'manufacturer_fk' => 2
        ]);

        // 22
        DB::table('mobile_suit')->insert([
            'name'  => 'Zakrello',
            'model' => 'MA-04X',
            'manufacturer_fk' => 2
        ]);

        // 23
        DB::table('mobile_suit')->insert([
            'name'  => 'Braw Bro',
            'model' => 'MAN-03',
            'manufacturer_fk' => 2
        ]);

        // 24
        DB::table('mobile_suit')->insert([
            'name'  => 'Agguguy',
            'model' => 'MSM-04',
            'manufacturer_fk' => 2
        ]);

        // 25
        DB::table('mobile_suit')->insert([
            'name'  => 'Juaggu',
            'model' => 'MSM-04G',
            'manufacturer_fk' => 2
        ]);

        // 26
        DB::table('mobile_suit')->insert([
            'name'  => 'Agg',
            'model' => 'EMS-05',
            'manufacturer_fk' => 2
        ]);

        // 27
        DB::table('mobile_suit')->insert([
            'name'  => 'Zogok',
            'model' => 'MSM-08',
            'manufacturer_fk' => 2
        ]);

        // 28
        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam Mk-II',
            'model' => 'RX-178',
            'manufacturer_fk' => 7
        ]);

        // 29
        DB::table('mobile_suit')->insert([
            'name'  => 'Hizack',
            'model' => 'RMS-106',
            'manufacturer_fk' => 4
        ]);

        // 30
        DB::table('mobile_suit')->insert([
            'name'  => 'Rick Dias',
            'model' => 'RMS-099',
            'manufacturer_fk' => 4
        ]);

        // 31
        DB::table('mobile_suit')->insert([
            'name'  => 'Galbaldy β',
            'model' => 'RMS-117',
            'manufacturer_fk' => 4
        ]);

        // 32
        DB::table('mobile_suit')->insert([
            'name'  => 'Zaku Tank',
            'model' => 'MS-06V',
            'manufacturer_fk' => 2
        ]);

        // 33
        DB::table('mobile_suit')->insert([
            'name'  => 'Marasai',
            'model' => 'RMS-108',
            'manufacturer_fk' => 4
        ]);

        // 34
        DB::table('mobile_suit')->insert([
            'name'  => 'Zeta Gundam',
            'model' => 'MSZ-006',
            'manufacturer_fk' => 4
        ]);

        // 35
        DB::table('mobile_suit')->insert([
            'name'  => 'GM-II',
            'model' => 'RMS-179',
            'manufacturer_fk' => 1
        ]);

        // 36
        DB::table('mobile_suit')->insert([
            'name'  => 'Nemo',
            'model' => 'MSA-003',
            'manufacturer_fk' => 4
        ]);

        // 37
        DB::table('mobile_suit')->insert([
            'name'  => 'Messala',
            'model' => 'PMX-000',
            'manufacturer_fk' => 8
        ]);

        // 38
        DB::table('mobile_suit')->insert([
            'name'  => 'Gaplant',
            'model' => 'ORX-005',
            'manufacturer_fk' => 7
        ]);

        // 39
        DB::table('mobile_suit')->insert([
            'name'  => 'Asshimar',
            'model' => 'NRX-044',
            'manufacturer_fk' => 1
        ]);

        // 40
        DB::table('mobile_suit')->insert([
            'name'  => 'Psyco Gundam',
            'model' => 'MRX-009',
            'manufacturer_fk' => 9
        ]);

        // 41
        DB::table('mobile_suit')->insert([
            'name'  => 'Gabthley',
            'model' => 'RX-110',
            'manufacturer_fk' => 1
        ]);

        // 42
        DB::table('mobile_suit')->insert([
            'name'  => 'Methuss',
            'model' => 'MSA-005',
            'manufacturer_fk' => 4
        ]);

        // 43
        DB::table('mobile_suit')->insert([
            'name'  => 'Hambrabi',
            'model' => 'RX-139',
            'manufacturer_fk' => 1
        ]);

        // 44
        DB::table('mobile_suit')->insert([
            'name'  => 'Palace Athene',
            'model' => 'PMX-001',
            'manufacturer_fk' => 8
        ]);

        // 45
        DB::table('mobile_suit')->insert([
            'name'  => 'Hyaku Shiki',
            'model' => 'MSN-00100',
            'manufacturer_fk' => 4
        ]);

        // 46
        DB::table('mobile_suit')->insert([
            'name'  => 'Dijeh',
            'model' => 'MSK-008',
            'manufacturer_fk' => 10
        ]);

        // 47
        DB::table('mobile_suit')->insert([
            'name'  => 'Qubeley',
            'model' => 'AMX-004',
            'manufacturer_fk' => 11
        ]);

        // 48
        DB::table('mobile_suit')->insert([
            'name'  => 'Byarlant',
            'model' => 'RX-160',
            'manufacturer_fk' => 7
        ]);

        // 49
        DB::table('mobile_suit')->insert([
            'name'  => 'Psyco Gundam Mk-II',
            'model' => 'MRX-010',
            'manufacturer_fk' => 9
        ]);

        // 50
        DB::table('mobile_suit')->insert([
            'name'  => 'Gaza-D',
            'model' => 'AMX-006',
            'manufacturer_fk' => 11
        ]);

        // 51
        DB::table('mobile_suit')->insert([
            'name'  => 'Galluss-J',
            'model' => 'AMX-101',
            'manufacturer_fk' => 12
        ]);

        // 52
        DB::table('mobile_suit')->insert([
            'name'  => 'Zssa',
            'model' => 'AMX-102',
            'manufacturer_fk' => 12
        ]);

        // 53
        DB::table('mobile_suit')->insert([
            'name'  => 'ZZ Gundam',
            'model' => 'MSZ-010',
            'manufacturer_fk' => 4
        ]);

        // 54
        DB::table('mobile_suit')->insert([
            'name'  => 'R-Jarja',
            'model' => 'AMX-104',
            'manufacturer_fk' => 12
        ]);

        // 55
        DB::table('mobile_suit')->insert([
            'name'  => 'Hamma Hamma',
            'model' => 'AMX-103',
            'manufacturer_fk' => 12
        ]);

        // 56
        DB::table('mobile_suit')->insert([
            'name'  => 'Ga-Zowmn',
            'model' => 'AMX-008',
            'manufacturer_fk' => 11
        ]);

        // 57
        DB::table('mobile_suit')->insert([
            'name'  => 'Dowadge',
            'model' => 'MS-09G',
            'manufacturer_fk' => 13
        ]);

        // 58
        DB::table('mobile_suit')->insert([
            'name'  => 'Bawoo',
            'model' => 'AMX-107',
            'manufacturer_fk' => 12
        ]);

        // 59
        DB::table('mobile_suit')->insert([
            'name'  => 'Gazu-R',
            'model' => 'AMX-117R',
            'manufacturer_fk' => 12
        ]);

        // 60
        DB::table('mobile_suit')->insert([
            'name'  => 'Gazu-L',
            'model' => 'AMX-117L',
            'manufacturer_fk' => 12
        ]);

        // 61
        DB::table('mobile_suit')->insert([
            'name'  => 'ReGelgu',
            'model' => 'MS-14J',
            'manufacturer_fk' => 11
        ]);

        // 62
        DB::table('mobile_suit')->insert([
            'name'  => 'EWAC Zack',
            'model' => 'RMS-119',
            'manufacturer_fk' => 1
        ]);

        // 63
        DB::table('mobile_suit')->insert([
            'name'  => 'Dreissen',
            'model' => 'AMX-009',
            'manufacturer_fk' => 12
        ]);

        // 64
        DB::table('mobile_suit')->insert([
            'name'  => 'Döven Wolf',
            'model' => 'AMX-014',
            'manufacturer_fk' => 12
        ]);

        // 65
        DB::table('mobile_suit')->insert([
            'name'  => 'Jamru Fin',
            'model' => 'AMA-01X',
            'manufacturer_fk' => 11
        ]);

        // 66
        DB::table('mobile_suit')->insert([
            'name'  => 'Zaku III',
            'model' => 'AMX-011',
            'manufacturer_fk' => 12
        ]);

        // 67
        DB::table('mobile_suit')->insert([
            'name'  => 'S-Gundam',
            'model' => 'MSA-0011',
            'manufacturer_fk' => 4
        ]);

        // 68
        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam F90',
            'model' => 'F90',
            'manufacturer_fk' => 5
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Hardygun',
            'model' => 'RGM-111',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Silhouette Gundam',
            'model' => 'RXF-91',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Vigna Zirah',
            'model' => 'XM-07G',
            'manufacturer_fk' => 6
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'G-Cannon Magna',
            'model' => 'F71B',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Neo Gundam',
            'model' => 'RX-99',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'cluster Gundam',
            'model' => 'F90III-Y',
            'manufacturer_fk' => 5
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Qubeley Mk-II',
            'model' => 'AMX-004-2',
            'manufacturer_fk' => 11
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam Zephyranthes',
            'model' => 'RX-78GP01',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Xeku Eins',
            'model' => 'RMS-141',
            'manufacturer_fk' => 1
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam GP03S',
            'model' => 'RX-78GP03S',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'The O',
            'model' => 'PMX-003',
            'manufacturer_fk' => 8
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Hygogg',
            'model' => 'MSM-03C',
            'manufacturer_fk' => 3
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Rick Dom II',
            'model' => 'MS-09R2',
            'manufacturer_fk' => 3
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gelgoog Jäger',
            'model' => 'MS-14Jg',
            'manufacturer_fk' => 2
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam NT1',
            'model' => 'RX-78NT-1',
            'manufacturer_fk' => 1
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Psyco Gundam',
            'model' => 'MRX-009',
            'manufacturer_fk' => 9
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam TR-1 [Hazel]',
            'model' => 'RX-121',
            'manufacturer_fk' => 14
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Zudah',
            'model' => 'EMS-10',
            'manufacturer_fk' => 3
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam GP02A',
            'model' => 'RX-78GP02A',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gaza-C',
            'model' => 'AMX-003',
            'manufacturer_fk' => 11
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Blue Destiny Unit 2',
            'model' => 'RX-79[G]BD-2',
            'manufacturer_fk' => 1
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam Ground Type',
            'model' => 'RX-79[G]',
            'manufacturer_fk' => 1
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Blue Destiny Unit 1',
            'model' => 'RX-79[G]BD-1',
            'manufacturer_fk' => 1
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Blue Destiny Unit 3',
            'model' => 'RX-79BD-3',
            'manufacturer_fk' => 1
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Jagd Doga',
            'model' => 'MSN-03',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Re-GZ',
            'model' => 'RGZ-91',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'v Gundam',
            'model' => 'RX-93',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Sazabi',
            'model' => 'MSN-04',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Kämpfer',
            'model' => 'MS-18E',
            'manufacturer_fk' => 2
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Geara Doga',
            'model' => 'AMS-119',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Schuzrum Dias',
            'model' => 'RMS-099B',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Jegan',
            'model' => 'RGM-89',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Kshatriya',
            'model' => 'NZ-666',
            'manufacturer_fk' => 12
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Geara Zulu',
            'model' => 'AMS-129',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Unicorn Gundam',
            'model' => 'RX-0',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'ReZEL',
            'model' => 'RGZ-95',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Loto',
            'model' => 'D-50C',
            'manufacturer_fk' => 5
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam X',
            'model' => 'GX-9900',
            'manufacturer_fk' => 5
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'God Gundam',
            'model' => 'GF13-017NJII',
            'manufacturer_fk' => 16
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Delta Plus',
            'model' => 'MSN-001A1',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Sinanju',
            'model' => 'MSN-06S',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Nobell Gundam',
            'model' => 'GF13-050NSW',
            'manufacturer_fk' => 18
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Extreme Gundam',
            'model' => '',
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'GM III',
            'model' => 'RGM-86R',
            'manufacturer_fk' => 1
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Shining Gundam',
            'model' => 'GF13-017NJ',
            'manufacturer_fk' => 16
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Master Gundam',
            'model' => 'GF13-001NHII',
            'manufacturer_fk' => 19
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Jesta',
            'model' => 'RGM-96X',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'GM II',
            'model' => 'RMS-179',
            'manufacturer_fk' => 1
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Zee Zulu',
            'model' => 'AMS-128M',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Dra-C',
            'model' => 'MS-21C',
            'manufacturer_fk' => 20
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Delta Gundam',
            'model' => 'MSN-001',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Juaggu',
            'model' => 'MSM-04G',
            'manufacturer_fk' => 2
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Anksha',
            'model' => 'RAS-96',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Rozen Zulu',
            'model' => 'YAMS-132',
            'manufacturer_fk' => 12
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam Ez8',
            'model' => 'RX-79(G)Ez-8',
            'manufacturer_fk' => 1
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gerbera Tetra',
            'model' => 'AGX-04',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Wing Gundam',
            'model' => 'XXXG-01W',
            'manufacturer_fk' => 21
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam Double X',
            'model' => 'GX-9901-DX',
            'manufacturer_fk' => 22
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Victory Gundam',
            'model' => 'LM312V04',
            'manufacturer_fk' => 23
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Victory Two Gundam',
            'model' => 'LM314V21',
            'manufacturer_fk' => 23
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Silver Bullet',
            'model' => 'ARX-014',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Aile Strike Gundam',
            'model' => 'GAT-X105+AQM/E-X01',
            'manufacturer_fk' => 24
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Wing Gundam Zero',
            'model' => 'XXXG-00W0',
            'manufacturer_fk' => 25
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Strike Rouge',
            'model' => 'MBF-02+AQM/E-X01',
            'manufacturer_fk' => 24
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => '∀ Gundam',
            'model' => 'WD-M01',
            'manufacturer_fk' => 26
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Neo Zeong',
            'model' => 'NZ-999',
            'manufacturer_fk' => 12
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Zeta Plus A1',
            'model' => 'MSZ-006A1',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam Airmaster',
            'model' => 'GW-9800',
            'manufacturer_fk' => 15
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'ZII',
            'model' => 'MSZ-008',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Crossbone Gundam X-1',
            'model' => 'XM-X1',
            'manufacturer_fk' => 5
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'V-Dash Gundam',
            'model' => 'LM312V04+SD-VB03A',
            'manufacturer_fk' => 23
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Freedom Gundam',
            'model' => 'ZGMF-Z10A',
            'manufacturer_fk' => 27
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Force Impulse Gundam',
            'model' => 'ZGMF-X56S/α',
            'manufacturer_fk' => 27
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'RX-78-3',
            'model' => 'Gundam "G3"',
            'manufacturer_fk' => 1
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Zeong',
            'model' => 'MSN-02',
            'manufacturer_fk' => 28
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam Spiegel',
            'model' => 'GF13-021NG',
            'manufacturer_fk' => 29
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam Unit 4',
            'model' => 'RX-78-4',
            'manufacturer_fk' => 1
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam Unit 5',
            'model' => 'RX-78-5',
            'manufacturer_fk' => 1
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Perfect Gundam',
            'model' => 'PF-78-1',
            'manufacturer_fk' => 1
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Strike Freedom',
            'model' => 'ZGMF-X20A',
            'manufacturer_fk' => 31
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Strike Noir Gundam',
            'model' => 'GAT-X105E+AQM/E-X09S',
            'manufacturer_fk' => 30
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Destiny Gundam',
            'model' => 'ZGMF-X42S',
            'manufacturer_fk' => 32
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Justice Gundam',
            'model' => 'ZGMF-X19A ∞',
            'manufacturer_fk' => 31
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam Exia',
            'model' => 'GN-001',
            'manufacturer_fk' => 33
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'GN-X',
            'model' => 'GNX-603T',
            'manufacturer_fk' => 34
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => '00 Qan[T]',
            'model' => 'GNT-0000',
            'manufacturer_fk' => 35
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Duel Gundam',
            'model' => 'GAT-X102',
            'manufacturer_fk' => 24
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam AGE-1',
            'model' => 'AGE-1',
            'manufacturer_fk' => 36
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Blitz Gundam',
            'model' => 'GAT-X207',
            'manufacturer_fk' => 24
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam AGE-2',
            'model' => 'AGE-2',
            'manufacturer_fk' => 36
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Buster Gundam',
            'model' => 'GAT-X103',
            'manufacturer_fk' => 24
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Aegis Gundam',
            'model' => 'GAT-X303',
            'manufacturer_fk' => 24
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Build Strike Gundam',
            'model' => 'GAT-X105B',
            'manufacturer_fk' => 37
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Build Gundam Mk-II',
            'model' => 'RX-178B',
            'manufacturer_fk' => 37
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Turn X',
            'model' => 'CONCEPT-X 6-1-2',
            'manufacturer_fk' => 26
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam Amazing Red Warrior',
            'model' => 'PF-78-3A',
            'manufacturer_fk' => 38
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Nightingale',
            'model' => 'MSN-04II',
            'manufacturer_fk' => 4
        ]);

        DB::table('mobile_suit')->insert([
            'name'  => 'Gundam Mk-III',
            'model' => 'MSF-007',
            'manufacturer_fk' => 4
        ]);
    }
}

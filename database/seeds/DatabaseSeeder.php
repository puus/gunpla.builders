<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ScaleTableSeeder::class);
        $this->call(TimelineTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(GradeTableSeeder::class);
        $this->call(ManufacturerTableSeeder::class);
        $this->call(MediaTypeTableSeeder::class);
        $this->call(MobileSuitTableSeeder::class);
        $this->call(MobileSuitVariationTableSeeder::class);
        $this->call(MobileSuitMediaTableSeeder::class);
        $this->call(PilotTableSeeder::class);
        $this->call(SourceTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersRolesTableSeeder::class);
        $this->call(FactionsTableSeeder::class);
        $this->call(CurrencyTableSeeder::class);
    }
}

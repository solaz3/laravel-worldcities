<?php

use Illuminate\Database\Seeder;

class WorldsTablesSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $this->call(WorldsContinentsTableSeeder::class);
        // $this->call(WorldsCountriesTableSeeder::class);
        // $this->call(WorldsStatesTableSeeder::class);
        // $this->call(WorldsCitiesTableSeeder::class);
    }
}

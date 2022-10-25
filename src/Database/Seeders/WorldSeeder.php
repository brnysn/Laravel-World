<?php

namespace Brnysn\World\Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class WorldSeeder extends Seeder
{
    public function run()
    {
        $this->seedCountries();
        $this->seedStates();
        $this->seedCities();
    }

    protected function seedCountries()
    {
        $sql = file_get_contents(__DIR__ . '/countries.sql');

        DB::unprepared(file_get_contents($sql));
    }

    protected function seedStates()
    {
        $sql = file_get_contents(__DIR__ . '/states.sql');

        DB::unprepared(file_get_contents($sql));
    }

    protected function seedCities()
    {
        $sql = file_get_contents(__DIR__ . '/cities.sql');

        DB::unprepared(file_get_contents($sql));
    }
}

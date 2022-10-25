<?php

namespace Brnysn\World\Database\Seeders;

use \DB;
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
        $sql = resource_path('/Database/seeders/countries.sql');

        DB::unprepared(file_get_contents($sql));
    }

    protected function seedStates()
    {
        $sql = resource_path('/Database/seeders/states.sql');

        DB::unprepared(file_get_contents($sql));
    }

    protected function seedCities()
    {
        $sql = resource_path('/Database/seeders/cities.sql');

        DB::unprepared(file_get_contents($sql));
    }
}

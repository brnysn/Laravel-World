<?php

namespace Brnysn\World\Database\Seeders;

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CountriesSeeder::class,
            StatesSeeder::class,
            CitiesSeeder::class,
            CitiesSeeder2::class,
            CitiesSeeder3::class,
            CitiesSeeder4::class,

        ]);
    }
}

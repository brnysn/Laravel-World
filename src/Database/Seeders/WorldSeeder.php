<?php

namespace Brnysn\World\Database\Seeders;

use Brnysn\World\Models\City;
use Brnysn\World\Models\Country;
use Brnysn\World\Models\State;
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
        $this->command->info('Seeding Countries');

        $csvFile = fopen(__DIR__.'/countries.csv', 'r');
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ',')) !== false) {
            if (! $firstline) {
                Country::insert([
                    'id' => $data[0],
                    'name' => $data[1],
                    'iso3' => $data[2],
                    'iso2' => $data[3],
                    'numeric_code' => $data[4],
                    'phone_code' => $data[5],
                    'capital' => $data[6],
                    'currency' => $data[7],
                    'currency_name' => $data[8],
                    'currency_symbol' => $data[9],
                    'tld' => $data[10],
                    'native' => $data[11],
                    'region' => $data[12],
                    'subregion' => $data[13],
                    'timezones' => $data[14],
                    'latitude' => $data[15],
                    'longitude' => $data[16],
                    'emoji' => $data[17],
                    'emojiU' => $data[18],
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);

        $this->command->info('👍 Countries Seeded Successfully');
    }

    protected function seedStates()
    {
        $this->command->info('Seeding States');

        $csvFile = fopen(__DIR__.'/states.csv', 'r');

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ',')) !== false) {
            if (! $firstline) {
                State::insert([
                    'id' => $data[0],
                    'name' => $data[1],
                    'country_id' => $data[2],
                    'country_code' => $data[3],
                    'country_name' => $data[4],
                    'state_code' => $data[5],
                    'type' => $data[6],
                    'latitude' => $data[7],
                    'longitude' => $data[8],
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);

        $this->command->info('👍 States Seeded Successfully');
    }

    protected function seedCities()
    {
        $this->command->info('Seeding Cities');

        $csvFile = fopen(__DIR__.'/cities.csv', 'r');
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ',')) !== false) {
            if (! $firstline) {
                City::insert([
                    'id' => $data[0],
                    'name' => $data[1],
                    'state_id' => $data[2],
                    'state_code' => $data[3],
                    'state_name' => $data[4],
                    'country_id' => $data[5],
                    'country_code' => $data[6],
                    'country_name' => $data[7],
                    'latitude' => $data[8],
                    'longitude' => $data[9],
                    'wikiDataId' => $data[10],
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);

        $this->command->info('👍 Cities Seeded Successfully');
    }
}

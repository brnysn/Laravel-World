<?php

namespace Brnysn\World\Database\Seeders;

use Brnysn\World\Models\City;
use Brnysn\World\Models\Country;
use Brnysn\World\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class WorldSeeder extends Seeder
{
    public function run()
    {
        $this->seedCountriesFromJson();
        $this->seedStatesFromJson();
        $this->seedCitiesFromJson();
    }

    protected function seedCountriesFromJson()
    {
        Country::truncate();

        $json = File::get("database/seeders/countries.json");
        $countries = json_decode($json);

        foreach ($countries as $key => $value) {
            Country::create($value);
        }
    }

    protected function seedStatesFromJson()
    {
        State::truncate();

        $json = File::get("database/seeders/states.json");
        $states = json_decode($json);

        foreach ($states as $key => $value) {
            State::create($value);
        }
    }

    protected function seedCitiesFromJson()
    {
        City::truncate();

        $json = File::get("database/seeders/cities.json");
        $cities = json_decode($json);

        foreach ($cities as $key => $value) {
            City::create($value);
        }
    }
}

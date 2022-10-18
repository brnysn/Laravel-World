<?php

namespace Brnysn\World\Traits;

use Brnysn\World\Models\City;
use Brnysn\World\Models\Country;
use Brnysn\World\Models\State;

trait HasAddress
{
    /**
     * Relationships
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /**
     * Scopes
     */
    public function scopeByCountry($query, $country_id)
    {
        return $query->where('country_id', $country_id);
    }

    public function scopeByState($query, $state_id)
    {
        return $query->where('state_id', $state_id);
    }

    public function scopeByCity($query, $city_id)
    {
        return $query->where('city_id', $city_id);
    }

    /**
     * Methods
     */
    public function changeCountry(Country $country) : self
    {
        $this->updateQuietly([
            'country_id' => $country->id,
        ]);
        return $this;
    }

    public function changeState(State $state) : self
    {
        $this->updateQuietly([
            'state_id' => $state->id,
        ]);
        return $this;
    }

    public function changeCity(City $city) : self
    {
        $this->updateQuietly([
            'city_id' => $city->id,
        ]);
        return $this;
    }

    public function changeAddress($address) : self
    {
        $this->updateQuietly([
            'country_id' => $address->country_id,
            'state_id' => $address->state_id,
            'city_id' => $address->city_id,
        ]);
        return $this;
    }
}

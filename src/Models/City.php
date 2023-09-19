<?php

namespace Brnysn\World\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string $name
 * @property string $state_code
 * @property string $state_name
 * @property string $country_code
 * @property string $country_name
 * @property string $latitude
 * @property string $longitude
 * @property string $wikiDataId
 * @property string $state_id
 * @property string $country_id
 */
class City extends BaseModel
{
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Scopes
     */
    public function scopeByCountry($query, $countryId)
    {
        return $query->where('country_id', $countryId);
    }

    public function scopeByState($query, $stateId)
    {
        return $query->where('state_id', $stateId);
    }
}

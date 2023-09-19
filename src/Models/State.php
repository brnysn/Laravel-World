<?php

namespace Brnysn\World\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $name
 * @property string $country_code
 * @property string $country_name
 * @property string $state_code
 * @property string $type
 * @property string $latitude
 * @property string $longitude
 * @property string $country_id
 */
class State extends BaseModel
{
    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
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
}

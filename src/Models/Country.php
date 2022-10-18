<?php

namespace Brnysn\World\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed  $id
 * @property string $name
 * @property string iso2
 * @property string iso3
 * @property string $numeric_code
 * @property string $phone_code
 * @property string $capital
 * @property string $currency
 * @property string $native
 * @property string $region
 * @property string $latitude
 * @property string $longitude
 * @property string $emoji
 */
class Country extends Model
{
    protected $guarded = [];

    protected $hidden = [];

    public function states() : \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(State::class);
    }

}

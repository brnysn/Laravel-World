<?php

namespace Brnysn\World\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property mixed $id
 * @property string $name
 * @property string iso2
 * @property string iso3
 * @property string $numeric_code
 * @property string $phone_code
 * @property string $capital
 * @property string $currency
 * @property string $currency_name
 * @property string $currency_symbol
 * @property string $tld
 * @property string $native
 * @property string $region
 * @property string $subregion
 * @property string $timezones
 * @property string $translations
 * @property string $latitude
 * @property string $longitude
 * @property string $emoji
 * @property string $emojiU
 */
class Country extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    protected $hidden = [];

    protected static function boot(): void
    {
        parent::boot();

        static::addGlobalScope('orderByName', function ($query) {
            $query->orderBy('name');
        });
    }

    public function states(): HasMany
    {
        return $this->hasMany(State::class);
    }

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
}

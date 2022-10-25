<?php

namespace Brnysn\World\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $id
 * @property string $name
 * @property string $country_code
 * @property string $country_name
 * @property string $state_code
 * @property string $type
 * @property string $latitude
 * @property string $longitude
 * @property string $country_id
 */
class State extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    protected $hidden = [];

    public function cities(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(City::class);
    }

    public function country(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}

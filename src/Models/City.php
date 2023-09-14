<?php

namespace Brnysn\World\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property mixed $id
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
class City extends Model
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

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}

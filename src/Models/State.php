<?php

namespace Brnysn\World\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    protected static function boot(): void
    {
        parent::boot();

        static::addGlobalScope('orderByName', function ($query) {
            $query->orderBy('name');
        });
    }

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}

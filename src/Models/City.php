<?php

namespace Brnysn\World\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed  $id
 * @property string $name
 * @property string $latitude
 * @property string $longitude
 * @property string $state_id
 */
class City extends Model
{
    protected $guarded = [];

    protected $hidden = [];

    public function state() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}

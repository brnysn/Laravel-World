<?php

namespace Brnysn\World\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $id
 */
class BaseModel extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    protected $hidden = [];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        if (config('world.use_uuid')) {
            $this->incrementing = false;
            $this->keyType = 'string';
        }
    }

    protected static function boot(): void
    {
        parent::boot();

        static::addGlobalScope('orderByName', function ($query) {
            $query->orderBy('name');
        });

        if (config('world.use_uuid')) {
            static::creating(function ($model) {
                $model->{$model->getKeyName()} = (string) \Illuminate\Support\Str::uuid();
            });
        }
    }
}

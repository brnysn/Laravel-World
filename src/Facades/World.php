<?php

namespace Brnysn\World\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Brnysn\World\World
 */
class World extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Brnysn\World\World::class;
    }
}

<?php

namespace LucasLaurens\LaravelManagerMaker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LucasLaurens\LaravelManagerMaker\LaravelManagerMaker
 */
class LaravelManagerMaker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \LucasLaurens\LaravelManagerMaker\LaravelManagerMaker::class;
    }
}

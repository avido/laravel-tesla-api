<?php
namespace Avido\LaravelTeslaApi\Facades;

use Illuminate\Support\Facades\Facade;

class TeslaApi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'tesla-api';
    }
}

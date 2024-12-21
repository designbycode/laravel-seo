<?php

namespace Designbycode\Seo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Designbycode\Seo\Seo
 */
class Seo extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Designbycode\Seo\Seo::class;
    }
}

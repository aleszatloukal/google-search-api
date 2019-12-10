<?php

namespace AlesZatloukal\GoogleSearchApi\Facades;

use Illuminate\Support\Facades\Facade;

class GoogleSearchApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'AlesZatloukal\GoogleSearchApi\GoogleSearchApi';
    }
}

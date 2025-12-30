<?php

namespace Ht3aa\StatusTabs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ht3aa\StatusTabs\StatusTabs
 */
class StatusTabs extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ht3aa\StatusTabs\StatusTabs::class;
    }
}

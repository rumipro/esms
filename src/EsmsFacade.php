<?php

namespace Rumipro\Esms;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rumipro\Esms\Skeleton\SkeletonClass
 */
class EsmsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'esms';
    }
}

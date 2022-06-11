<?php

namespace Ajeya\Crm;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ajeya\Crm\Skeleton\SkeletonClass
 */
class CrmFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'crm';
    }
}

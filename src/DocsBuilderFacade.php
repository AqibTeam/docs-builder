<?php

namespace AqibTeam\DocsBuilder;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AqibTeam\DocsBuilder\Skeleton\SkeletonClass
 */
class DocsBuilderFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'docs-builder';
    }
}

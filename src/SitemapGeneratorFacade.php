<?php

namespace Sitemap\SitemapGenerator;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sitemap\SitemapGenerator\Skeleton\SkeletonClass
 */
class SitemapGeneratorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sitemap-generator';
    }
}

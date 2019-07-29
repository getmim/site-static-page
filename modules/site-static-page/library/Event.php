<?php
/**
 * Event
 * @package site-static-page
 * @version 0.0.1
 */

namespace SiteStaticPage\Library;

use LibCacheOutput\Library\Cleaner;

class Event
{
    static function clear(object $page): void{
        if(module_exists('lib-cache-output'))
            Cleaner::router('siteStaticPageSingle', (array)$page);
    }
}
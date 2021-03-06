<?php

namespace Kirby\Cms;

use Kirby\Http\Request;
use Kirby\Toolkit\Facade;

/**
 * Shortcut to the request object
 */
class R extends Facade
{
    /**
     * @return Request
     */
    protected static function instance()
    {
        return App::instance()->request();
    }
}

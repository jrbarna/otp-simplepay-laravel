<?php

declare(strict_types=1);

namespace Jrbarna\SimplePayLaravel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jrbarna\SimplePayLaravel\Skeleton\SkeletonClass
 */
class SimplePayLaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'simplepay-laravel';
    }
}

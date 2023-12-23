<?php

namespace Weward\LaraMacro\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Weward\LaraMacro\LaraMacro
 */
class LaraMacro extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Weward\LaraMacro\LaraMacro::class;
    }
}

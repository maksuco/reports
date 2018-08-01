<?php

namespace Maksuco\Reports\Facades;

use Illuminate\Support\Facades\Facade;

class Reports extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ('maksuco-reports');
    }
}

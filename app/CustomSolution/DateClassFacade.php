<?php

namespace App\CustomSolution;

use Illuminate\Support\Facades\Facade;

class DateClassFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "dateClass";
    }
}

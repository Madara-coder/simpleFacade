<?php

namespace App\CustomSolution;

use Illuminate\Support\Facades\Facade;

class TestClassFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return "testClass";
    }
}
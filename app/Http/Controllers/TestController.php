<?php

namespace App\Http\Controllers;

use App\CustomSolution\TestClassFacade;

class TestController extends Controller
{
    /**
     * Simple method for testing out the custom facade.
     *
     * @return string
     */
    public function index(): string
    {
        return TestClassFacade::testFunction();
    }
}

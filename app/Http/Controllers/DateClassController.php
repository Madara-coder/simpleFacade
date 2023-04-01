<?php

namespace App\Http\Controllers;

use App\CustomSolution\DateClassFacade;

class DateClassController extends Controller
{
    /**
     * Simple date format conversion method by using DateClass Custom  Facade.
     *
     * @return string
     */
    public function dateConvert(): string
    {
        return DateClassFacade::dateFormatYMD("10/21/2022");
    }
}

<?php

namespace App\CustomSolution;

use Carbon\Carbon;

class DateClass
{
    /**
     * Converts the given date format to different format
     *
     * @param string $date
     * @return string
     */
    public function dateFormatYMD(string $date): string
    {
        return Carbon::createFromFormat('m/d/Y', $date)->format('Y-m-d');
    }
}

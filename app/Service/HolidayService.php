<?php
namespace App\Service;

use Carbon\Carbon;

class HolidayService
{
    public function isHoliday(Carbon $date)
    {
        return $date->isWeekend();
    }
}

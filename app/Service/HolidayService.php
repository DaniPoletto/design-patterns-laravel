<?php
namespace App\Service;

use Carbon\Carbon;

class HolidayService
{
    protected $holidays = [
        '2023-12-25', 
        '2023-01-01',
    ];

    public function isHoliday(Carbon $date)
    {
        $formattedDate = $date->format('Y-m-d');
        return in_array($formattedDate, $this->holidays);
    }
}
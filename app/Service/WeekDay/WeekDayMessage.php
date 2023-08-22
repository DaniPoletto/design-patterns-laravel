<?php
namespace App\Service\WeekDay;

use App\Service\WeekDay\WeekDayMessageInterface;

class WeekDayMessage
{
    public function returnMessage(WeekDayMessageInterface $weekday)
    {
        return $weekday->getMessage();
    }
}

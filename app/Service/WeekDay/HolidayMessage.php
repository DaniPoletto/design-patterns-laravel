<?php
namespace App\Service\WeekDay;

class HolidayMessage implements WeekDayMessageInterface
{
    public function getMessage()
    {
        return "Happy Holiday!";
    }
}

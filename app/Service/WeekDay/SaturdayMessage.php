<?php
namespace App\Service\WeekDay;

class SaturdayMessage implements WeekDayMessageInterface
{
    public function getMessage()
    {
        return "Happy Saturday!";
    }
}

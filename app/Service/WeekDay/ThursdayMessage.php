<?php
namespace App\Service\WeekDay;

class ThursdayMessage implements WeekDayMessageInterface
{
    public function getMessage()
    {
        return "Happy Thursday!";
    }
}

<?php
namespace App\Service\WeekDay;

class TuesdayMessage implements WeekDayMessageInterface
{
    public function getMessage()
    {
        return "Happy Tuesday!";
    }
}

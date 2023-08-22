<?php
namespace App\Service\WeekDay;

class WednesdayMessage implements WeekDayMessageInterface
{
    public function getMessage()
    {
        return "Happy Wednesday!";
    }
}

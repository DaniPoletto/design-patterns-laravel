<?php
namespace App\Service\WeekDay;

class FridayMessage implements WeekDayMessageInterface
{
    public function getMessage()
    {
        return "Happy Friday!";
    }
}

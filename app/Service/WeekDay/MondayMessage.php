<?php
namespace App\Service\WeekDay;

class MondayMessage implements WeekDayMessageInterface
{
    public function getMessage()
    {
        return "Happy Monday!";
    }
}

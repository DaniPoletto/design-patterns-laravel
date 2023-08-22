<?php
namespace App\Service\WeekDay;

class SundayMessage implements WeekDayMessageInterface
{
    public function getMessage()
    {
        return "Happy Sunday!";
    }
}

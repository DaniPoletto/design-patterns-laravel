<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Service\WeekDay\MondayMessage;
use App\Service\WeekDay\TuesdayMessage;
use App\Service\WeekDay\WednesdayMessage;
use App\Service\WeekDay\ThursdayMessage;
use App\Service\WeekDay\FridayMessage;
use App\Service\WeekDay\SaturdayMessage;
use App\Service\WeekDay\SundayMessage;
use App\Service\WeekDay\HolidayMessage;
use App\Service\WeekDay\WeekDayMessage;

class WeekDayController extends Controller
{
    public function index()
    {
        $today = Carbon::now();
        $dayOfWeekName = $today->englishDayOfWeek;
        $messageClassName = 'App\Service\WeekDay\\' . $dayOfWeekName . 'Message';
    
        if (class_exists($messageClassName)) {
            $weekDayMessage = new WeekDayMessage();
            return $weekDayMessage->returnMessage(new $messageClassName());
        } else {
            return "Mensagem padrão para este dia da semana";
        }
    }
}

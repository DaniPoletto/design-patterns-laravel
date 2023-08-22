<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Service\HolidayService;
use App\Service\WeekDay\WeekDayMessage;

class WeekDayController extends Controller
{
    public function index(HolidayService $holidayService)
    {
        $today = Carbon::now();
        
        if ($holidayService->isHoliday($today)) {
            $dayOfWeekName = 'Holiday';
        } else {
            $dayOfWeekName = $today->englishDayOfWeek;
        }

        $message = $this->getWeekDayMessage($dayOfWeekName);

        return view('strategy', ['message' => $message]);
    }

    public function getWeekDayMessage($dayOfWeekName)
    {
        $messageClassName = 'App\Service\WeekDay\\' . $dayOfWeekName . 'Message';
    
        if (class_exists($messageClassName)) {
            $weekDayMessage = new WeekDayMessage();
            $message = $weekDayMessage->returnMessage(new $messageClassName());
        } else {
            $message = "Default message for this day of the week";
        }

        return $message;
    }
}
<?php
namespace Tests\Unit;

use Tests\TestCase;
use Carbon\Carbon;
use App\Http\Controllers\WeekDayController;
use App\Service\WeekDay\WeekDayMessage;
use App\Service\WeekDay\MondayMessage;
use App\Service\WeekDay\TuesdayMessage;
use App\Service\WeekDay\WednesdayMessage;
use App\Service\WeekDay\ThursdayMessage;
use App\Service\WeekDay\FridayMessage;
use App\Service\WeekDay\SaturdayMessage;
use App\Service\WeekDay\SundayMessage;
use App\Service\WeekDay\HolidayMessage;
use App\Service\HolidayService; 

class WeekDayControllerTest extends TestCase
{
    /**
     * @dataProvider weekDayProvider
     */
    public function testIndex($dayOfWeek, $expectedMessage)
    {
        Carbon::setTestNow(Carbon::parse($dayOfWeek)); 
        
        $holidayService = new HolidayService(); 
        $controller = new WeekDayController();
        $response = $controller->index($holidayService);

        $message = $response->getData()["message"];

        $this->assertEquals($expectedMessage, $message);
    }

    static public function weekDayProvider()
    {
        return [
            ['Monday', 'Happy Monday!'],
            ['Tuesday', 'Happy Tuesday!'],
            ['Wednesday', 'Happy Wednesday!'],
            ['Thursday', 'Happy Thursday!'],
            ['Friday', 'Happy Friday!'],
            ['Saturday', 'Happy Saturday!'],
            ['Sunday', 'Happy Sunday!'],
            ['2023-12-25', 'Happy Holiday!'],
        ];
    }
}
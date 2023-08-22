<?php

namespace Tests\Unit;

use Tests\TestCase;
use Carbon\Carbon;
use App\Service\HolidayService;

class HolidayServiceTest extends TestCase
{
    public function testIsHolidayReturnsTrueForHoliday()
    {
        $holidayService = new HolidayService();
        $date = Carbon::parse('2023-12-25');

        $result = $holidayService->isHoliday($date);

        $this->assertTrue($result);
    }

    public function testIsHolidayReturnsFalseForNonHoliday()
    {
        $holidayService = new HolidayService();
        $date = Carbon::parse('2023-12-26');

        $result = $holidayService->isHoliday($date);

        $this->assertFalse($result);
    }
}

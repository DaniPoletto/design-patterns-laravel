<?php
namespace Tests\Unit;

use Tests\TestCase;
use App\Service\WeekDay\WeekDayMessage;
use App\Service\WeekDay\WeekDayMessageInterface;
use Mockery;

class WeekDayMessageTest extends TestCase
{
    public function testReturnMessage()
    {
        $weekdayMock = Mockery::mock(WeekDayMessageInterface::class);
        $weekdayMock->shouldReceive('getMessage')->andReturn('Mensagem de teste');

        $message = new WeekDayMessage();
        $response = $message->returnMessage($weekdayMock);

        $this->assertEquals('Mensagem de teste', $response);
    }
}

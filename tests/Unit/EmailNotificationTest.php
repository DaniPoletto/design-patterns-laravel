<?php
namespace Tests;

use App\Observers\Email;
use App\Observers\MobileNotificationObserver;
use App\Observers\DesktopAppNotificationObserver;

class EmailNotificationTest extends TestCase
{
    use CreatesApplication;

    public function testMobileNotification()
    {
        $email = new Email();
        $mobileObserver = new MobileNotificationObserver();
        $email->attach($mobileObserver);

        $this->expectOutputString("Notificação via celular: Novo e-mail chegou!<br>");
        
        $email->notify();
    }

    public function testDesktopAppNotification()
    {
        $email = new Email();
        $desktopObserver = new DesktopAppNotificationObserver();
        $email->attach($desktopObserver);

        $this->expectOutputString("Notificação via aplicativo desktop: Novo e-mail chegou!<br>");
        
        $email->notify();
    }
}

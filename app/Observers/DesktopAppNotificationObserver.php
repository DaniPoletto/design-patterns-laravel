<?php
namespace App\Observers;

class DesktopAppNotificationObserver implements Observer {
    public function update($email) {
        echo "Notificação via aplicativo desktop: Novo e-mail chegou!<br>";
    }
}

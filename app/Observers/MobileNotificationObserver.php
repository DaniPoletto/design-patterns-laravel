<?php
namespace App\Observers;

class MobileNotificationObserver implements Observer {
    public function update($email) {
        echo "Notificação via celular: Novo e-mail chegou!<br>";
    }
}

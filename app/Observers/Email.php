<?php
namespace App\Observers;

class Email {
    protected $observers = [];

    public function attach($observer) {
        $this->observers[] = $observer;
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}

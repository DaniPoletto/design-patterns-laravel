<?php

namespace App\Providers;

use App\Observers\Email;
use Illuminate\Support\ServiceProvider;
use App\Observers\MobileNotificationObserver;
use App\Observers\DesktopAppNotificationObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $email = new Email();
        $email->attach(new MobileNotificationObserver());
        $email->attach(new DesktopAppNotificationObserver());
        $this->app->instance(Email::class, $email);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

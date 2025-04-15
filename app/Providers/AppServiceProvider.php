<?php

namespace App\Providers;

use App\Drivers\WhatsAppDriver;
use App\Interfaces\MessageDriverInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();
        $this->app->bind(MessageDriverInterface::class, WhatsAppDriver::class);
    }
}

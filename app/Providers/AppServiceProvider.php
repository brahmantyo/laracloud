<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use App\Interfaces\MessageDriverInterface;
use App\Drivers\WhatsAppDriver;
use App\Drivers\SlackAppDriver;

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

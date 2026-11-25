<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Local dev behind an ngrok HTTPS tunnel: generate https URLs so assets,
        // redirects and forms are not blocked as mixed content.
        if ($this->app->environment('local')
            && !$this->app->runningInConsole()
            && Str::endsWith(request()->getHost(), ['.ngrok-free.dev', '.ngrok-free.app', '.ngrok.dev', '.ngrok.app'])) {
            URL::forceScheme('https');
        }
    }
}

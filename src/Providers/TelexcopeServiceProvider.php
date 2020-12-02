<?php

namespace Moon\Telexcope\Providers;

use Illuminate\Support\ServiceProvider;

class TelexcopeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        dd("service provider is working...");
    }
}

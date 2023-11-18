<?php

namespace Obelaw\NameModule;

use Illuminate\Support\ServiceProvider;

class ObelawNameModuleServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'obelaw-namemodule');
    }
}

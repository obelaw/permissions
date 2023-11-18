<?php

namespace Obelaw\Permissions;

use Obelaw\Framework\Base\ServiceProviderBase;

class ObelawPermissionsServiceProvider extends ServiceProviderBase
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
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'obelaw-permissions');
    }
}

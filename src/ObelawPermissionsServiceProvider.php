<?php

namespace Obelaw\Permissions;

use Livewire\Livewire;
use Obelaw\Framework\Base\ServiceProviderBase;
use Obelaw\Permissions\Livewire\Admins\CreateAdminComponent;
use Obelaw\Permissions\Livewire\Admins\IndexAdminsComponent;
use Obelaw\Permissions\Livewire\Admins\UpdateAdminComponent;

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

        Livewire::component('obelaw-permissions-admins-index', IndexAdminsComponent::class);
        Livewire::component('obelaw-permissions-admins-create', CreateAdminComponent::class);
        Livewire::component('obelaw-permissions-admins-update', UpdateAdminComponent::class);
    }
}

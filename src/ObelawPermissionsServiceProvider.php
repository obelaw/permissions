<?php

namespace Obelaw\Permissions;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Obelaw\Facades\Compile;
use Obelaw\Framework\Facades\MiddlewareManager;
use Obelaw\Permissions\Compiles\Scan\Modules\ACLCompile;
use Obelaw\Permissions\Compiles\Scan\Plugins\ACLPluginCompile;
use Obelaw\Permissions\Http\Middleware\PermissionMiddleware;
use Obelaw\Permissions\Livewire\Admins\CreateAdminComponent;
use Obelaw\Permissions\Livewire\Admins\IndexAdminsComponent;
use Obelaw\Permissions\Livewire\Admins\UpdateAdminComponent;
use Obelaw\Permissions\Livewire\Auth\LoginPage;
use Obelaw\Permissions\Livewire\Rules\CreateRuleComponent;
use Obelaw\Permissions\Livewire\Rules\IndexRulesComponent;
use Obelaw\Permissions\Livewire\Rules\PermissionsRuleComponent;
use Obelaw\Permissions\Livewire\Rules\UpdateRuleComponent;

class ObelawPermissionsServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        config([
            'auth.guards.obelaw' => array_merge([
                'driver' => 'session',
                'provider' => 'obelaw',
            ], config('auth.guards.store', [])),
        ]);

        config([
            'auth.providers.obelaw' => array_merge([
                'driver' => 'eloquent',
                'model' => \Obelaw\Permissions\Models\Admin::class,
            ], config('auth.providers.obelaw', [])),
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'obelaw-permissions');

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        Compile::mergeModuleScaneers([
            ACLCompile::class,
        ]);

        Compile::mergePluginScaneers([
            ACLPluginCompile::class,
        ]);

        MiddlewareManager::addMiddleware(PermissionMiddleware::class, 9);

        Livewire::component('obelaw-auth-login', LoginPage::class);

        Livewire::component('obelaw-permissions-admins-index', IndexAdminsComponent::class);
        Livewire::component('obelaw-permissions-admins-create', CreateAdminComponent::class);
        Livewire::component('obelaw-permissions-admins-update', UpdateAdminComponent::class);

        Livewire::component('obelaw-permissions-rules-index', IndexRulesComponent::class);
        Livewire::component('obelaw-permissions-rules-create', CreateRuleComponent::class);
        Livewire::component('obelaw-permissions-rules-update', UpdateRuleComponent::class);
        Livewire::component('obelaw-permissions-rules-permissions', PermissionsRuleComponent::class);
    }
}

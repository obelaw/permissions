<?php

namespace Obelaw\Permissions\Livewire;

use Livewire\Component;
use Obelaw\Framework\ACL\Attributes\PermissionAccess;
use Obelaw\Framework\ACL\Traits\BootPermission;
use Obelaw\Framework\Views\Layout\DashboardLayout;

#[PermissionAccess('obelaw_helper_permissions')]
class HomeComponent extends Component
{
    use BootPermission;

    public $allPermissions = false;
    public $permissions = [];

    public function render()
    {
        return view('obelaw-permissions::home')->layout(DashboardLayout::class);
    }
}

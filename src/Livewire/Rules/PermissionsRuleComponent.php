<?php

namespace Obelaw\Permissions\Livewire\Rules;

use Livewire\Component;
use Obelaw\UI\Permissions\Access;
use Obelaw\Framework\ACL\Models\Rule;
use Obelaw\UI\Permissions\Traits\BootPermission;
use Obelaw\Framework\Base\Traits\PushAlert;
use Obelaw\Facades\Bundles;
use Obelaw\UI\Views\Layout\DashboardLayout;

#[Access('permissions_rule_permissions_update')]
class PermissionsRuleComponent extends Component
{
    use BootPermission;
    use PushAlert;

    public $allPermissions = false;
    public $permissions = [];

    public function mount(Rule $rule)
    {
        $this->rule = $rule;

        $this->permissions = $rule->permissions;
    }

    public function render()
    {
        return view('obelaw-permissions::rules.permissions', [
            'ACls' => Bundles::getACls(),
        ])->layout(DashboardLayout::class);
    }

    public function submit()
    {
        $this->rule->update([
            'permissions' => $this->permissions,
        ]);

        $this->pushAlert('success', 'The permissions has been update');
    }
}

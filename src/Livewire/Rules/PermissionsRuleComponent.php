<?php

namespace Obelaw\Permissions\Livewire\Rules;

use Livewire\Component;
use Obelaw\Framework\ACL\Attributes\PermissionAttribute;
use Obelaw\Framework\ACL\Models\Rule;
use Obelaw\Framework\ACL\Traits\BootPermission;
use Obelaw\Framework\Base\Traits\PushAlert;
use Obelaw\Framework\Facades\Bundles;
use Obelaw\Framework\Views\Layout\DashboardLayout;

#[PermissionAttribute('permissions_rule_permissions_update')]
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
        $this->rule->permissions = $this->permissions;
        $this->rule->save();

        $this->pushAlert('success', 'The permissions has been update');
    }
}

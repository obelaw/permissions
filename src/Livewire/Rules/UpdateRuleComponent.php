<?php

namespace Obelaw\Permissions\Livewire\Rules;

use Obelaw\Framework\ACL\Attributes\PermissionAttribute;
use Obelaw\Framework\ACL\Models\Rule;
use Obelaw\Framework\Base\FromBase;

#[PermissionAttribute('permissions_rule_update')]
class UpdateRuleComponent extends FromBase
{
    public $formId = 'obelaw_helper_permissions_rule_form';

    public $rule = null;

    protected $pretitle = 'Permissions';
    protected $title = 'Update This Rule';

    public function mount(Rule $rule)
    {
        $this->rule = $rule;
        $this->name = $rule->name;
    }

    public function submit()
    {
        $validateData = $this->validate();

        $this->rule->update($validateData);

        $this->pushAlert('success', 'The rule has been update');

        return redirect()->route('obelaw.permissions.rules.index');
    }
}

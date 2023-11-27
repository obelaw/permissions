<?php

namespace Obelaw\Permissions\Livewire\Rules;

use Obelaw\UI\Permissions\Access;
use Obelaw\Framework\ACL\Models\Rule;
use Obelaw\UI\Renderer\FormRender;

#[Access('permissions_rule_create')]
class CreateRuleComponent extends FormRender
{
    public $formId = 'obelaw_helper_permissions_rule_form';

    protected $pretitle = 'Permissions';
    protected $title = 'Create New Rule';

    public function submit()
    {
        $validateData = $this->validate();

        $validateData['permissions'] = [];

        Rule::create($validateData);

        $this->pushAlert('success', 'The rule has been created');

        return redirect()->route('obelaw.permissions.rules.permissions');
    }
}

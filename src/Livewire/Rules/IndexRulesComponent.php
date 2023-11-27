<?php

namespace Obelaw\Permissions\Livewire\Rules;

use Obelaw\UI\Permissions\Access;
use Obelaw\UI\Renderer\GridRender;

#[Access('permissions_rules_index')]
class IndexRulesComponent extends GridRender
{
    public $gridId = 'obelaw_helper_permissions_rules_index';

    protected $pretitle = 'Permissions';
    protected $title = 'Rules Listing';
}

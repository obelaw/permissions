<?php

namespace Obelaw\Permissions\Livewire\Admins;

use Obelaw\Framework\ACL\Attributes\PermissionAccess;
use Obelaw\Framework\Base\GridBase;

#[PermissionAccess('permissions_admin_index')]
class IndexAdminsComponent extends GridBase
{
    public $gridId = 'obelaw_helper_permissions_admins_index';

    protected $pretitle = 'Permissions';
    protected $title = 'Admins Listing';
}

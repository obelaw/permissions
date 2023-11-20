<?php

namespace Obelaw\Permissions\Livewire\Admins;

use Illuminate\Support\Facades\Hash;
use Obelaw\Framework\ACL\Attributes\PermissionAccess;
use Obelaw\Framework\ACL\Models\Admin;
use Obelaw\Framework\Base\FromBase;

#[PermissionAccess('permissions_admin_create')]
class CreateAdminComponent extends FromBase
{
    public $formId = 'obelaw_helper_permissions_admin_form';

    protected $pretitle = 'Permissions';
    protected $title = 'Create New Admin';

    public function submit()
    {
        $validateData = $this->validate();
        $validateData['password'] = Hash::make($validateData['password']);

        Admin::create($validateData);

        $this->pushAlert('success', 'The admin has been created');

        return redirect()->route('obelaw.permissions.admins.index');
    }
}

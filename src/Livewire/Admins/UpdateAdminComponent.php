<?php

namespace Obelaw\Permissions\Livewire\Admins;

use Illuminate\Support\Facades\Hash;
use Obelaw\Framework\ACL\Attributes\PermissionAttribute;
use Obelaw\Framework\ACL\Models\Admin;
use Obelaw\Framework\Base\FromBase;

#[PermissionAttribute('permissions_admin_update')]
class UpdateAdminComponent extends FromBase
{
    public $formId = 'obelaw_helper_permissions_admin_update_form';

    public $admin = null;

    protected $pretitle = 'Permissions';
    protected $title = 'Create Update This Admin';

    public function mount(Admin $admin)
    {
        $this->admin = $admin;
        $this->rule_id = $admin->rule_id;
        $this->name = $admin->name;
        $this->email = $admin->email;
        $this->status = $admin->status;
    }

    public function submit()
    {
        $validateData = $this->validate();

        if ($validateData['password']) {
            $validateData['password'] = Hash::make($validateData['password']);
        } else {
            unset($validateData['password']);
        }

        $this->admin->update($validateData);

        $this->pushAlert('success', 'The admin has been updated');

        return redirect()->route('obelaw.permissions.admins.index');
    }
}

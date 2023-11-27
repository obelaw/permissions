<?php

use Obelaw\Framework\ACL\Models\Admin;
use Obelaw\Schema\Grid\Button\RouteAction;
use Obelaw\Schema\Grid\Button;
use Obelaw\Schema\Grid\CTA;
use Obelaw\Schema\Grid\Table;

return new class
{
    public $model = Admin::class;

    public function createButton(Button $button)
    {
        $button->setButton(
            label: 'Create new admin',
            route: 'obelaw.permissions.admins.create',
            permission: 'permissions_admin_create'
        );
    }

    public function table(Table $table)
    {
        $table->setColumn('Name', 'name')
            ->setColumn('Email', 'email')
            ->setColumn('Status', 'status');
    }

    public function CTA(CTA $CTA)
    {
        $CTA->setCall('Update', new RouteAction(
            href: 'obelaw.permissions.admins.update',
            permission: 'permissions_admin_update',
        ));
    }
};

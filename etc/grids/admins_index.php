<?php

use Obelaw\Framework\ACL\Models\Admin;
use Obelaw\Framework\Builder\Build\Grid\{
    CTA,
    Table,
    Bottom
};

return new class
{
    public function model()
    {
        return Admin::class;
    }

    public function createBottom(Bottom $bottom)
    {
        $bottom->setBottom(
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
        $CTA->setCall('Update', CTA::call(
            type: 'route',
            route: 'obelaw.permissions.admins.update',
            permission: 'permissions_admin_update',
        ));
    }
};

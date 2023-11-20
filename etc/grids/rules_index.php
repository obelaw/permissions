<?php

use Obelaw\Framework\ACL\Models\Rule;
use Obelaw\Framework\Builder\Build\Grid\{
    CTA,
    Table,
    Bottom
};
use Obelaw\Framework\Builder\Build\Common\RouteAction;

return new class
{
    public function model()
    {
        return Rule::class;
    }

    public function createBottom(Bottom $bottom)
    {
        $bottom->setBottom(
            label: 'Create new rule',
            route: 'obelaw.permissions.rules.create',
            permission: 'permissions_rule_create'
        );
    }

    public function table(Table $table)
    {
        $table->setColumn('Name', 'name');
    }

    public function CTA(CTA $CTA)
    {
        $CTA->setCall('Update', new RouteAction(
            href: 'obelaw.permissions.rules.update',
            permission: 'permissions_rule_update',
        ));

        $CTA->setCall('Permissions', new RouteAction(
            href: 'obelaw.permissions.rules.permissions',
            permission: 'permissions_rule_permissions_update',
        ));
    }
};

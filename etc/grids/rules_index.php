<?php

use Obelaw\Framework\ACL\Models\Rule;
use Obelaw\Framework\Builder\Build\Grid\{
    CTA,
    Table,
    Bottom
};

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
        $CTA->setCall('Update', CTA::call(
            type: 'route',
            route: 'obelaw.permissions.rules.update',
            permission: 'permissions_rule_update',
        ));

        $CTA->setCall('Permissions', CTA::call(
            type: 'route',
            route: 'obelaw.permissions.rules.permissions',
            permission: 'permissions_rule_permissions_update',
        ));
    }
};

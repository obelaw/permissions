<?php

use Obelaw\Schema\ModuleInfo;

return new class
{
    public function setInfo(ModuleInfo $module)
    {
        $module->info(
            name: 'Permissions',
            icon: 'lock-square-rounded',
            href: 'obelaw.permissions.home',
            helper: true
        );
    }
};

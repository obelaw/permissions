<?php

use Obelaw\Schema\BundleRegistrar;
use Obelaw\Permissions\ObelawPermissionsServiceProvider;

BundleRegistrar::register(BundleRegistrar::MODULE, 'obelaw_helper_permissions', __DIR__, function ($config) {
    $config->setProvider(ObelawPermissionsServiceProvider::class);
});

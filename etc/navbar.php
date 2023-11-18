<?php

use Obelaw\Framework\Builder\Build\Navbar\Links;

return new class
{
    public function navbar(Links $links)
    {
        $links->link(
            icon: 'home-2',
            label: 'Home',
            href: 'obelaw.permissions.home',
        );
    }
};

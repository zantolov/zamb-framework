<?php

namespace Definition;

use Zantolov\Zamb\Admin\ZambAdminExtension;
use Zantolov\Zamb\Core\Application\ExtensionsCollection;
use Zantolov\Zamb\Core\Application\ExtensionsModifierInterface;

class Extensions implements ExtensionsModifierInterface
{
    public function defineExtensions(ExtensionsCollection $extensions)
    {
        $extensions->add(new ZambAdminExtension());

    }

}
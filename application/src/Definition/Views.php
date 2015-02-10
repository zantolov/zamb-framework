<?php

namespace Definition;

use Zantolov\Zamb\Admin\ZambAdminExtension;
use Zantolov\Zamb\Core\Application\ViewModifierInterface;
use Zantolov\Zamb\Core\Application\ViewPathsCollection;

class Views implements ViewModifierInterface
{

    /**
     * Define paths where View (templating) engine should look for files
     * All paths are relative to the project root
     * Paths can be namespaced
     * @param ViewPathsCollection $paths
     */
    public function defineViewPaths(ViewPathsCollection $paths)
    {

        $paths->add('application/src/View');


        // Define view paths for Extensions
        \Extension::get(ZambAdminExtension::EXTENSION_ID)->defineViewPaths($paths);
    }

}
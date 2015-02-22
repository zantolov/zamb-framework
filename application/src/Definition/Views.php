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
    public static function defineViewPaths(ViewPathsCollection $paths)
    {

        $paths->add('application/src/View');
        $paths->add('application/src/Bundle/', 'bundle');


        // Define view paths for Extensions
        ZambAdminExtension::defineViewPaths($paths);
        \Zantolov\Zamb\Example\Admin\Views::defineViewPaths($paths);

    }

}
<?php

namespace Definition;

use Zantolov\Zamb\Admin\ZambAdminExtension;
use Zantolov\Zamb\Core\Application\EntityPathsCollection;

/**
 * Class Entities
 * This class is used for defining user-created entity paths, used in Doctrine configuration.
 * All paths should be relative to project root!
 * @package Definition
 *
 */
class Entities
{

    public static function defineEntityPaths(EntityPathsCollection $paths)
    {
        $paths->add('application/src/Model');

        // Include extensions entities paths
        ZambAdminExtension::defineEntityPaths($paths);
        \Zantolov\Zamb\Example\Admin\Entities::defineEntityPaths($paths);
        \Zantolov\Zamb\Example\Ecommerce\Entities::defineEntityPaths($paths);
        \Zantolov\Zamb\Example\Blog\Entities::defineEntityPaths($paths);
    }

}

<?php

namespace Definition;

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

    public function defineEntityPaths(EntityPathsCollection $paths)
    {
        $paths->add('application/src/Model');
    }

}

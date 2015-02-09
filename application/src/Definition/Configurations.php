<?php

namespace Definition;

use Zantolov\Zamb\Core\Application\ConfigurationModifierInterface;

class Configurations implements ConfigurationModifierInterface
{

    public function defineConfiguration(array &$config)
    {
        $config['application.mode.development'] = 1;

        $config['database.params'] = array(
            'driver'   => 'pdo_mysql',
            'host'     => '127.0.0.1',
            'dbname'   => 'zamb',
            'user'     => 'zamb',
            'password' => ''
        );

    }
}

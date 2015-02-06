<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once 'application/bootstrap/bootstrap.php';

$entityManager = EntityManager::get();

return ConsoleRunner::createHelperSet($entityManager);
<?php

namespace Bundle\AuthBundle\Model;

/**
 * @Entity
 * @Table(
 *  name="users",
 *  indexes={
 *      @Index(name="username_idx", columns={"username"})
 *  }
 * )
 */
class User extends \Zantolov\Zamb\Example\Admin\Model\User
{

}
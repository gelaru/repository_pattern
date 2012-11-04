<?php
/**
 * Created by JetBrains PhpStorm.
 * User: geli
 * Date: 02/11/2012
 * Time: 21:40
 * To change this template use File | Settings | File Templates.
 */

namespace Mapper;
use Model\UserInterface;

interface UserCollectionInterface extends \Countable, \ArrayAccess, \IteratorAggregate
{
    public function add(UserInterface $user);

    public function remove(UserInterface $user);

    public function get($key);

    public function exists($key);

    public function clear();

    public function toArray();
}
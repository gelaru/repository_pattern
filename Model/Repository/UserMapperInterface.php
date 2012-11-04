<?php
/**
 * Created by JetBrains PhpStorm.
 * User: geli
 * Date: 02/11/2012
 * Time: 21:45
 * To change this template use File | Settings | File Templates.
 */

namespace Model\Repository;

interface UserMapperInterface
{
    public function fetchById($id);
    public function fetchAll(array $conditions = array());
}
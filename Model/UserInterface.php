<?php

namespace Model;
/**
 * Created by JetBrains PhpStorm.
 * User: geli
 * Date: 02/11/2012
 * Time: 21:37
 * To change this template use File | Settings | File Templates.
 */


interface UserInterface
{
    public function setId($id);

    public function getId();

    public function setName($name);

    public function getName();

    public function setEmail($email);

    public function getEmail();

    public function setRole($role);

    public function getRole();
}
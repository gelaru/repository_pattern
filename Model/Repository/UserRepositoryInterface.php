<?php

namespace Model\Repository;

interface UserRepositoryInterface
{
    public function fetchById($id);
    public function fetchByName($name);
    public function fetchbyEmail($email);
    public function fetchByRole($role);
}
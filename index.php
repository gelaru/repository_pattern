<?php
use Library\Loader\Autoloader,
    Library\Database\PdoAdapter,
    Mapper\UserMapper,
    Model\Collection\UserCollection,
    Model\Repository\UserRepository;

require_once __DIR__ . "/Library/Loader/Autoloader.php";
$autoloader = new Autoloader;
$autoloader->register();

$adapter = new PdoAdapter("mysql:dbname=users", "myfancyusername", "mysecretpassword");
$userMapper = new UserMapper($adapter, new UserCollection());
$userRepository = new UserRepository($userMapper);

$users = $userRepository->fetchByName("Rachel");
foreach ($users as $user) {
    echo $user->getName() . " " . $user->getEmail() . "<br>";
}

$users = $userRepository->fetchByEmail("username@domain.com");
foreach ($users as $user) {
    echo $user->getName() . " " . $user->getEmail() . "<br>";
}

$administrators = $userRepository->fetchByRole("administrator");
foreach ($administrators as $administrator) {
    echo $administrator->getName() . " " .
        $administrator->getEmail() . "<br>";
}

$guests = $userRepository->fetchByRole("guest");
foreach ($guests as $guest) {
    echo $guest->getName() . " " . $guest->getEmail() . "<br>";
}
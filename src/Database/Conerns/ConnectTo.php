<?php
namespace  Mvc\Mvc\Database\Conerns;

use Mvc\Mvc\Database\Managers\Contracts\DataBaseManager;

trait ConnectTo
{
    public static function connect(DataBaseManager $manager):\PDO{
        return $manager->connect();
    }
}
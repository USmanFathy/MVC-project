<?php
namespace Mvc\Mvc\Database\Managers;

use Mvc\Mvc\Database\Managers\Contracts\DataBaseManager;

class MysqlManager implements DataBaseManager
{

    #[\Override] public function connect(): \PDO
    {
        include base_path().'config/database.php';
        return new \PDO(
            "mysql:host=127.0.0.1;dbname=mvc",
            "root",
            "root"
        );
    }

    #[\Override] public function query(string $query, $values = [])
    {
        // TODO: Implement query() method.
    }

    #[\Override] public function create($data)
    {
        // TODO: Implement create() method.
    }

    #[\Override] public function read($columns = "*", $filter = null)
    {
        // TODO: Implement read() method.
    }

    #[\Override] public function update($id, $data)
    {
        // TODO: Implement update() method.
    }

    #[\Override] public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
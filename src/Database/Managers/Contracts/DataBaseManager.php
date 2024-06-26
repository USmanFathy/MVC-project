<?php
namespace Mvc\Mvc\Database\Managers\Contracts;


interface DataBaseManager
{
    public function connect():\PDO;
    public function query(string $query , $values=[]);
    public function create($data);
    public function read($columns="*" , $filter=null);

    public function update($id ,$data);

    public function delete($id);


}
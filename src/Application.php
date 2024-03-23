<?php
namespace  Mvc\Mvc;


use Mvc\Mvc\Http\Route;

class Application
{
    protected Route $route;

    public function __construct(){
        $this->route = new Route();
    }

    public function run(){
        $env = \Dotenv\Dotenv::createImmutable(base_path());
        $env->load();
        $this->route->resolveData();
    }
}
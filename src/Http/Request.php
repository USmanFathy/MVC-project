<?php

namespace Mvc\Mvc\Http;

class Request{

    public function getMethodRequest():string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
    public function getPathRequest():string
    {
        $path = $_SERVER['REQUEST_URI'];
        return str_contains("?", $path) ? explode('?', $path)[0] : $path;
    }
}

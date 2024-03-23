<?php

namespace Mvc\Mvc\Http;

class Route
{
    protected static array $routes =[];
    public Request $request;
    public Response $response;

    public function __construct()
    {
        $this->request = new Request();
        $this->response = new Response();
    }

    public static function get(string $path ,array|callable $action):void{

        self::$routes['get'][$path] = $action;

    }
    public static function post(string $path ,array|callable $action):void{

        self::$routes['post'][$path] = $action;

    }
    public static function put(string $path ,array|callable $action):void{

        self::$routes['put'][$path] = $action;

    }
    public static function delete(string $path ,array|callable $action):void{

        self::$routes['delete'][$path] = $action;

    }
    public static function resourceApi(string $path ,array|callable $action):void{

        self::$routes['delete'][$path] = 'destroy';
        self::$routes['put'][$path] = 'update';
        self::$routes['get'][$path] = 'index';
        self::$routes['post'][$path] = 'store';

    }

    public static function getRoutes():array{
        return self::$routes;
    }

    public function resolveData()
    {
        $path = $this->request->getPathRequest();
        $method = $this->request->getMethodRequest();
        $action = self::$routes[$method][$path] ?? false;
        if (!array_key_exists($path , self::$routes[$method])){
            return abort('404');
        }

        if (is_callable($action)) {
            return call_user_func($action ,[]);
        }
        if (is_array($action) && function_exists($action[1])){
          return abort('404');
        }

            return call_user_func_array([new $action[0] ,$action[1]], []);

    }

}
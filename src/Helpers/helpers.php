<?php

use Mvc\Mvc\Application;
use Mvc\Mvc\View\View;

if ( ! function_exists('env')){
    function env($key, $default=null){
        return  $_ENV[$key] ?? value($default);
    }
}
if ( ! function_exists('value')){
    function value($value){
        return  ($value instanceof Closure) ? $value() : $value;
    }
}

if (!function_exists('base_path')){
    function base_path($key=''):string
    {
        return dirname(__DIR__)."/../".$key;
    }
}
if (!function_exists('abort')){
    function abort($key):void
    {
        include base_path('views') .'/errors/'.$key.'.php';
    }
}
if (!function_exists('bcrypt')){
    function bcrypt($key):string
    {
        return \Mvc\Mvc\Support\Hash::make($key);
    }
}

if (!function_exists('view')){
    function view(string $path ,array $variables =[],$isErrors=false)
    {
         View::render($path, $variables,$isErrors);
    }
}
if (!function_exists('app')){
    function app()
    {
        static $app = null;
        if(!$app){
            $app = new Application();
        }
        return $app;
    }
}


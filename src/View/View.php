<?php

namespace Mvc\Mvc\View;

class View
{
    private static $instance = null;

    // Private constructor to prevent instantiation from outside
    private function __construct()
    {
        self::getInstance();
    }
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public static function render(string $path, array $variables =[])
    {
        $base =self::renderBase();
        $view =self::renderPartial($path, $variables );
        echo str_replace('{{content}}', $view, $base);
    }

    public static function renderBase(){
        ob_start();
        include base_path('views').'/layouts/main.php';
        return ob_get_clean();
    }

    public static function renderPartial(string $path, array $variables =[] ){
        $includedPath = base_path()  . str_replace('.','/',$path) . '.php';

        // Extract variables if provided
        if (!is_null($variables)) {
            foreach ($variables as $key => $value) {
                $$key = $value;
            }
        }
        if(!$includedPath){
            include $includedPath;
        }else{
            ob_start();
            include $includedPath;
            return ob_get_clean();
        }

    }

}
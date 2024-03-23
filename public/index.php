<?php

use Mvc\Mvc\Http\Route;
use Mvc\Mvc\Support\Arr;

require_once __DIR__.'/../src/Helpers/helpers.php';
require_once base_path().'src/Support/Arr.php';
require_once base_path().'vendor/autoload.php';
require_once base_path().'routes/web.php';


app()->run();


$array1 =[
    'username'  => 'usman',
    'email' => 'usman@gmail.com',
];

$array = new Arr();
dd();
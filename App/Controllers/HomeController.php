<?php

namespace App\Controllers;

use Mvc\Mvc\View\View;

class HomeController
{
    public function index(){
        $usman ='usman ahmed';
        return \view('views.home',['usman' => $usman]);
    }
    public function destroy(){
    }
    public function update(){
    }
    public function store(){
    }
}
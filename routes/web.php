<?php

use App\Controllers\HomeController;
use Mvc\Mvc\Http\Route;

Route::get('/test',[HomeController::class , 'index']);

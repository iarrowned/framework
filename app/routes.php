<?php

use Framework\Routing\Route;
use Framework\Routing\Router;

Router::addRoute(
    new Route('hello',
    'HelloController@index',
Route::METHOD_GET));
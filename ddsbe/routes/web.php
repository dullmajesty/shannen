<?php

/** @var \Laravel\Lumen\Routing\Router $router */
   
$router->get('/users',['uses' => 'UserController@getUsers']);


$router->get('/', function () use ($router) {
    return $router->app->version();
});


<?php

/** @var \Laravel\Lumen\Routing\Router $router */
   
$router->get('/users',['uses' => 'UserController@getUsers']);
$router->post('/users',['uses' => 'UserController@add']);

$router->get('/', function () use ($router) {
    return $router->app->version();
});


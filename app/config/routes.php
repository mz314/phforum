<?php

$router = new Phalcon\Mvc\Router();

$router->add("/", array(
    'name'=>'home',
    'controller' => 'index',
    'action' => 'index'
));


$router->add("/board", array(
    'name'=>'board',
    'controller' => 'board',
    'action' => 'board'
))->setName("board");





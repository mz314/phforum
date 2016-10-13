<?php

$router = new Phalcon\Mvc\Router();

$router->add("/", array(
    'name'=>'home',
    'controller' => 'index',
    'action' => 'index'
));


$router->add("/board", array(
    'controller' => 'board',
    'action' => 'board'
))->setName("board");



$router->add("/register", array(

    'controller' => 'security',
    'action'=>'register'

))->setName("register");




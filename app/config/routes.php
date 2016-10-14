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

$router->add("/board/thread/{thread_id}", array(
    'controller' => 'board',
    'action' => 'thread'
))->setName("thread");

$router->add("/register", array(

    'controller' => 'security',
    'action'=>'register'

))->setName("register");


$router->add("/login", array(

    'controller' => 'security',
    'action'=>'login'

))->setName("login");

$router->add("/logout", array(

    'controller' => 'security',
    'action'=>'logout'

))->setName("logout");


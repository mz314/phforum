<?php

namespace PhForum\Controllers;
use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        $this->view->messages = \PhForum\Models\Message::find();

    }

   

}
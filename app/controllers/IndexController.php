<?php

namespace PhForum\Controllers;
use Phalcon\Mvc\Controller;
use PhForum\Models\Message;

class IndexController extends Controller
{
    public function indexAction()
    {

        $messages = Message::query()
            ->order('id desc')
            ->limit(10)
            ->execute()
            ;
        $this->view->messages = $messages; //\PhForum\Models\Message::find();

    }

   

}
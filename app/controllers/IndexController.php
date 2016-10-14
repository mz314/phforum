<?php

namespace PhForum\Controllers;
use Phalcon\Mvc\Controller;
use PhForum\Models\Threads;

class IndexController extends Controller
{
    public function indexAction()
    {

        $messages = Threads::query()
            ->order('id desc')
            ->limit(10)
            ->execute()
            ;
        $this->view->messages = $messages; 

    }

   

}
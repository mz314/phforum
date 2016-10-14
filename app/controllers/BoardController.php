<?php

namespace PhForum\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;

use PhForum\Forms\MessageForm;
use PhForum\Models\Threads;
use PhForum\Models\Replies;

//https://docs.phalconphp.com/en/latest/reference/controllers.html#injecting-services
class BoardController extends Controller
{

    public function threadAction() 
    {
          $threadId = $this->dispatcher->getParam("thread_id");
          $thread = Threads::findFirstById($threadId);
          $replies = Replies::findByThreadId($threadId);
          
          
          $this->view->thread = $thread;
          $this->view->replies = $replies;
    }
    
    public function boardAction()
    {

        $form = new MessageForm();

        $this->view->messages = Threads::find();

        
        if ($this->request->isPost()) {
 
            $message = new Threads();
            $form->bind($this->request->getPost(), $message);

            if ($form->isValid()) {
                $message->user_id = $this->auth->getUser()->id;
                $message->save();
                $this->view->disable();
                $response = new Response();

                return $response->redirect([
                    'for'=>'board',
                      
                ]);
            }

        }

        $this->view->form = $form;
    }
}
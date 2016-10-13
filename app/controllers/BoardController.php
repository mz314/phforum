<?php

namespace PhForum\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;

use PhForum\Forms\MessageForm;
use PhForum\Models\Message;

//https://docs.phalconphp.com/en/latest/reference/controllers.html#injecting-services
class BoardController extends Controller
{

    public function boardAction()
    {

        $form = new MessageForm();

        $this->view->messages = Message::find();

        if ($this->request->isPost()) {
 
            $message = new Message();
            $form->bind($this->request->getPost(), $message);

            if ($form->isValid()) {
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
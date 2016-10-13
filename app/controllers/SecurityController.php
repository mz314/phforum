<?php

namespace PhForum\Controllers;

use Phalcon\Mvc\Controller;
use PhForum\Forms\RegisterForm;
use PhForum\Models\Users;

//https://docs.phalconphp.com/en/latest/reference/security.html

class SecurityController extends Controller
{

    public function registerAction()
    {
        $form = new RegisterForm();

        if($this->request->isPost()) {
            $user = new Users();
            $form->bind($this->request->getPost(), $user);

            if($form->isValid()) {
                $user->password = $this->security->hash($this->request->getPost('password'));
                $user->save();
            }

        }
        
        $this->view->form = $form;
    }
}
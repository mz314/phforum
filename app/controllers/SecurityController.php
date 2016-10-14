<?php

namespace PhForum\Controllers;

use Phalcon\Mvc\Controller;
use PhForum\Forms\RegisterForm;
use PhForum\Forms\LoginForm;
use PhForum\Models\Users;

//https://docs.phalconphp.com/en/latest/reference/security.html

class SecurityController extends Controller
{

    public function loginAction()
    {
        $form = new LoginForm();
        if ($this->request->isPost()) {
            $form->bind($this->request->getPost(), null);
            if ($form->isValid()) {
                $uname = $form->getValue('username');
                $pass = $form->getValue('password');

                $user = $this->auth->checkCredentials($uname, $pass);

                if ($user) {
                    $this->auth->authenticateUser($user);
                } else {
                    
                }
            }
        }


        $this->view->form = $form;
    }

    public function registerAction()
    {
        $form = new RegisterForm();

        if ($this->request->isPost()) {
            $user = new Users();
            $form->bind($this->request->getPost(), $user);

            if ($form->isValid()) {
                $user->password = $this->security->hash($this->request->getPost('password'));
                $user->save();
            }
        }

        $this->view->form = $form;
    }

    public function logoutAction()
    {
        $this->auth->clearIdentity();
        die('logged out');
    }
}

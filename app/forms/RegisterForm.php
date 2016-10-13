<?php

namespace PhForum\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\TextArea;
use Phalcon\Validation\Validator\PresenceOf;

class RegisterForm extends Form
{

    public function initialize()
    {
        $this->add(
            (new Text(
            "username"
            ))->addValidator(new PresenceOf())
        );

        $this->add(
            (new Text(
            "password"
            ))->addValidator(new PresenceOf())
        );
    }
}
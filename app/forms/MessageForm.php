<?php
namespace PhForum\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\TextArea;
use Phalcon\Validation\Validator\PresenceOf;

class MessageForm extends Form
{
    public function initialize()
    {
        $this->add(
            (new Text(
                "uname"
            ))->addValidator(new PresenceOf())
        );



        $this->add(
            (new TextArea(
                "text"
            ))->addValidator(new PresenceOf())
        );


    }
}
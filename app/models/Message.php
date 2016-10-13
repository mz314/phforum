<?php
namespace PhForum\Models;


class Message extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $text;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $uname;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'messages';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Messages[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Messages
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}

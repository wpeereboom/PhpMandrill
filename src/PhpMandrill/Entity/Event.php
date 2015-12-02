<?php
namespace PhpMandrill\Entity;

class Event
{

    /**
     * @var array
     */
    protected $properties = [
        'ts',
        'type',
        'msg',
        'id',
    ];

    /**
     * @var int
     */
    protected $ts;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var Message
     */
    protected $msg;

    /**
     * @var string
     */
    protected $_id;

    /**
     * @return int
     */
    public function getTs()
    {
        return $this->ts;
    }

    /**
     * @param int $ts
     */
    public function setTs($ts)
    {
        $this->ts = $ts;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return Message
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param Message $msg
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return array
     */
    public function getProperties()
    {
        return $this->properties;
    }
}
<?php
namespace PhpMandrill\Mapper;

use PhpMandrill\Entity\Event;

class EventMapper
{
    static public function map(array $data)
    {
        $event = new Event();
        $event->setId($data['_id']);
        $event->setTs($data['ts']);
        $event->setType($data['event']);
        $event->setMsg(MessageMapper::map($data['msg']));

        return $event;
    }
}
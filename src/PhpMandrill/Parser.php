<?php
namespace PhpMandrill;

use PhpMandrill\Entity\Event;
use PhpMandrill\Mapper\EventMapper;

class Parser
{
    private $rawEvents;

    public function __construct($rawEvents)
    {
        $this->rawEvents = $rawEvents;
    }

    /**
     * @return Event
     */
    public function parse()
    {
        return EventMapper::map($this->rawEvents);
    }

}
<?php
namespace PhpMandrill\Mapper;

use PhpMandrill\Entity\Message;

class MessageMapper
{
    /**
     * @param $data
     * @return Message
     */
    static public function map($data)
    {
        $message = new Message();

        $message->setTs($data['ts']);
        $message->setClicks($data['clicks']);
        $message->setEmail($data['email']);
        $message->setOpens($data['opens']);
        $message->setReject($data['reject']);
        $message->setId($data['_id']);
        $message->setResends($data['resends']);
        $message->setTemplate($data['template']);
        $message->setTags($data['tags']);
        $message->setSubaccount($data['subaccount']);
        $message->setSubject($data['subject']);
        $message->setSmtpEvents($data['smtp_events']);
        $message->setState($data['state']);

        return $message;
    }
}
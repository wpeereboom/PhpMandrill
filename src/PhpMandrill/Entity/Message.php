<?php
namespace PhpMandrill\Entity;

class Message
{

    /**
     * @var array
     */
    protected $properties = [
        'ts',
        'subject',
        'tags',
        'opens',
        'clicks',
        'state',
        'smtp_events',
        'subaccount',
        'resends',
        'reject',
        'id',
        'email',
        'sender',
        'template',
    ];

    /**
     * @var int
     */
    protected $ts;

    /**
     * @var string
     */
    protected $subject;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var array
     */
    protected $tags;

    /**
     * @var array
     */
    protected $opens;

    /**
     * @var array
     */
    protected $clicks;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var array
     */
    protected $smtp_events;

    /**
     * @var string
     */
    protected $subaccount;

    /**
     * @var array
     */
    protected $resends;

    /**
     * @var string
     */
    protected $reject;

    /**
     * @var string
     */
    protected $_id;

    /**
     * @var string
     */
    protected $sender;

    /**
     * @var string
     */
    protected $template;

    public function __construct()
    {

    }

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
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return array
     */
    public function getOpens()
    {
        return $this->opens;
    }

    /**
     * @param array $opens
     */
    public function setOpens($opens)
    {
        $this->opens = $opens;
    }

    /**
     * @return array
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * @param array $clicks
     */
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return array
     */
    public function getSmtpEvents()
    {
        return $this->smtp_events;
    }

    /**
     * @param array $smtp_events
     */
    public function setSmtpEvents($smtp_events)
    {
        $this->smtp_events = $smtp_events;
    }

    /**
     * @return string
     */
    public function getSubaccount()
    {
        return $this->subaccount;
    }

    /**
     * @param string $subaccount
     */
    public function setSubaccount($subaccount)
    {
        $this->subaccount = $subaccount;
    }

    /**
     * @return array
     */
    public function getResends()
    {
        return $this->resends;
    }

    /**
     * @param array $resends
     */
    public function setResends($resends)
    {
        $this->resends = $resends;
    }

    /**
     * @return string
     */
    public function getReject()
    {
        return $this->reject;
    }

    /**
     * @param string $reject
     */
    public function setReject($reject)
    {
        $this->reject = $reject;
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
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param string $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param string $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    }

    /**
     * @return array
     */
    public function getProperties()
    {
        return $this->properties;
    }
}
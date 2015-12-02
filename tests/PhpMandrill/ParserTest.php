<?php
use PhpMandrill\Parser;

class ParserTest extends PHPUnit_Framework_TestCase
{
    public function testParser()
    {
        $arr = array(
                'event' => 'send',
                '_id' => 'fa44d110c54e42faaceea1a712f08118',
                'msg' =>
                    array(
                        'ts' => 1449048886,
                        'subject' => 'Nuova risposta',
                        'email' => 'avvocanzi@example.org',
                        'tags' =>
                            array (
                                0 => 'consumer_tag',
                                1 => 'www.mysite.it',
                            ),
                        'opens' =>
                            array (
                            ),
                        'clicks' =>
                            array (
                            ),
                        'state' => 'sent',
                        'smtp_events' =>
                            array (
                            ),
                        'subaccount' => NULL,
                        'resends' =>
                            array (
                            ),
                        'reject' => NULL,
                        '_id' => 'fa44d110c54e42faaceea1a712f08118',
                        'sender' => 'dd6ef1f1a486@reply.mysite.it',
                        'template' => NULL,
                    ),
                'ts' => 1449048886,
            );
        $parser = new Parser($arr);
        $event = $parser->parse();

        $this->assertEquals('send', $event->getType());
        $this->assertEquals('fa44d110c54e42faaceea1a712f08118', $event->getId());
    }
}

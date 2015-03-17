<?php

namespace Mdb\PayPal\Ipn\Event;

use Mdb\PayPal\Ipn\Message;
use Symfony\Component\EventDispatcher\Event;

class MessageVerifiedEvent extends Event implements MessageVerificationEvent
{
    /**
     * @var Message
     */
    private $message;

    /**
     * @param Message $message
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return $this->message;
    }
}
<?php

namespace Spatie\EventSourcing\Events;

use Exception;
use Spatie\EventSourcing\EventHandlers\EventHandler;
use Spatie\EventSourcing\StoredEvents\StoredEvent;

class EventHandlerFailedHandlingEvent
{
    /**
     * @var EventHandler
     */
    public $eventHandler;

    /**
     * @var StoredEvent
     */
    public $storedEvent;

    /**
     * @var Exception
     */
    public $exception;

    public function __construct(EventHandler $eventHandler, StoredEvent $storedEvent, Exception $exception)
    {
        $this->eventHandler = $eventHandler;

        $this->storedEvent = $storedEvent;

        $this->exception = $exception;
    }
}

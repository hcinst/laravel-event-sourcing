<?php

namespace Spatie\EventSourcing\Tests\TestClasses\AggregateRoots\Projectors;

use Spatie\EventSourcing\EventHandlers\Projectors\Projector;
use Spatie\EventSourcing\Tests\TestClasses\AggregateRoots\StorableEvents\DummyEvent;

class GetMetaDataProjector extends Projector
{
    /**
     * @var string
     */
    public static $foundAggregateRootUuid = '';

    public function onDummyEvent(DummyEvent $event)
    {
        static::$foundAggregateRootUuid = $event->aggregateRootUuid();
    }
}

<?php

namespace Spatie\EventSourcing\Snapshots;

class Snapshot
{
    /**
     * @var string
     */
    public $aggregateUuid;

    /**
     * @var int
     */
    public $aggregateVersion;

    /**
     * @var array
     */
    public $state;

    public function __construct(
        string $aggregateUuid,
        int $aggregateVersion,
        $state
    ) {
        $this->aggregateUuid = $aggregateUuid;
        $this->aggregateVersion = $aggregateVersion;
        $this->state = $state;
    }
}

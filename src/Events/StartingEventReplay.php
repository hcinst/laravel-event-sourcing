<?php

namespace Spatie\EventSourcing\Events;

use Illuminate\Support\Collection;

class StartingEventReplay
{
    /**
     * @var Collection
     */
    public $projectors;

    public function __construct(Collection $projectors)
    {
        $this->projectors = $projectors;
    }
}

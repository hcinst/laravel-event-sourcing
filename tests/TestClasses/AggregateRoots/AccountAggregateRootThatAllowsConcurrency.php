<?php

namespace Spatie\EventSourcing\Tests\TestClasses\AggregateRoots;

class AccountAggregateRootThatAllowsConcurrency extends AccountAggregateRoot
{
    /**
     * @var bool
     */
    protected static $allowConcurrency = true;
}

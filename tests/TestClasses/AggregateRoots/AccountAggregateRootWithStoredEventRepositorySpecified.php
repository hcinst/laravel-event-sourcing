<?php

namespace Spatie\EventSourcing\Tests\TestClasses\AggregateRoots;

use Spatie\EventSourcing\AggregateRoots\AggregateRoot;
use Spatie\EventSourcing\Tests\TestClasses\AggregateRoots\StorableEvents\MoneyAdded;
use Spatie\EventSourcing\Tests\TestClasses\Repositories\OtherEloquentStoredEventRepository;

class AccountAggregateRootWithStoredEventRepositorySpecified extends AggregateRoot
{
    /**
     * @var int
     */
    public $balance = 0;

    /**
     * @var string
     */
    public $storedEventRepository = OtherEloquentStoredEventRepository::class;

    public function addMoney(int $amount): self
    {
        $this->recordThat(new MoneyAdded($amount));

        return $this;
    }

    public function applyMoneyAdded(MoneyAdded $event)
    {
        $this->balance += $event->amount;
    }
}

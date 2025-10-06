<?php
declare(strict_types=1);

namespace DDD;

interface AggregateRoot
{
    /**
     * @return array<DomainEvent>
     */
    public function releaseEvents(): array;
}
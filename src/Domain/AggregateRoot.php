<?php
declare(strict_types=1);

namespace DDD\Library\Domain;

interface AggregateRoot
{
    /**
     * @return array<DomainEvent>
     */
    public function releaseEvents(): array;
}
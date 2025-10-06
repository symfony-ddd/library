<?php
declare(strict_types=1);

namespace DDDValue;

use DDD\Value;

abstract readonly class BoolValue implements Value
{
    protected function __construct(
        public bool $value
    ) {
    }

    public function eq(BoolValue $other): bool
    {
        return $this->value === $other->value && $this::class === $other::class;
    }

    public function neq(BoolValue $other): bool
    {
        return !$this->eq($other);
    }

    public function and(BoolValue $other): bool
    {
        return $this->value && $other->value;
    }

    public function or(BoolValue $other): bool
    {
        return $this->value || $other->value;
    }

    public function not(): bool
    {
        return !$this->value;
    }
}

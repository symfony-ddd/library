<?php
declare(strict_types=1);

namespace SymfonyDDD\Library\Domain\Value;

use SymfonyDDD\Library\Domain\Value;

abstract readonly class StringValue implements Value
{
    protected function __construct(
        public string $value
    ) {
    }

    public function eq(StringValue $other): bool
    {
        return $this->value === $other->value && $this::class === $other::class;
    }

    public function neq(StringValue $other): bool
    {
        return !$this->eq($other);
    }

    public function gt(StringValue $other): bool
    {
        return $this->value > $other->value;
    }

    public function lt(StringValue $other): bool
    {
        return $this->value < $other->value;
    }

    public function gte(StringValue $other): bool
    {
        return $this->value >= $other->value;
    }

    public function lte(StringValue $other): bool
    {
        return $this->value <= $other->value;
    }

    public function isEmpty(): bool
    {
        return $this->value === '';
    }

    public function contains(string $needle): bool
    {
        return str_contains($this->value, $needle);
    }

    public function startsWith(string $prefix): bool
    {
        return str_starts_with($this->value, $prefix);
    }

    public function endsWith(string $suffix): bool
    {
        return str_ends_with($this->value, $suffix);
    }
}

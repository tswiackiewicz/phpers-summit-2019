<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Shared;

use Ramsey\Uuid\Uuid as RamseyUuid;

/**
 * Example of concept (object) shared between multiple BC
 */
class Uuid
{
    /** @var string */
    private $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function fromString(string $value): self
    {
        return new self($value);
    }

    public static function random(): self
    {
        return new self(RamseyUuid::uuid4()->toString());
    }

    public function value(): string
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value();
    }
}

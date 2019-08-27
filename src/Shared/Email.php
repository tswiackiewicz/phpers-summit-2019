<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Shared;

class Email
{
    /** @var string */
    private $email;

    private function __construct(string $email)
    {
        $this->email = $email;
    }

    public static function fromString(string $email): self
    {
        return new self($email);
    }

    public function email(): string
    {
        return $this->email;
    }

    public function __toString()
    {
        return $this->email;
    }
}
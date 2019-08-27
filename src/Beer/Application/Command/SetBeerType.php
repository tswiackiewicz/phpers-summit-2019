<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Application\Command;

use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerId;

class SetBeerType
{
    /** @var BeerId */
    private $beerId;

    /** @var string */
    private $type;

    /** @var string */
    private $username;

    public function __construct(BeerId $beerId, string $type, string $username)
    {
        $this->beerId = $beerId;
        $this->type = $type;
        $this->username = $username;
    }

    public function beerId(): BeerId
    {
        return $this->beerId;
    }

    public function username(): string
    {
        return $this->username;
    }

    public function type(): string
    {
        return $this->type;
    }
}
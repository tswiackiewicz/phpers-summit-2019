<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Application\Command;

use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerId;

class RateBeer
{
    /** @var BeerId */
    private $beerId;

    /** @var int */
    private $rating;

    public function __construct(BeerId $beerId, int $rating)
    {
        $this->beerId = $beerId;
        $this->rating = $rating;
    }

    public function beerId(): BeerId
    {
        return $this->beerId;
    }

    public function rating(): int
    {
        return $this->rating;
    }
}
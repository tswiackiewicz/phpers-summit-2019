<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Domain\Comment;

use TSwiackiewicz\PHPersSummit\Beer\Shared\{BeerException, BeerId};
use TSwiackiewicz\PHPersSummit\Shared\Uuid;

/**
 * "Virtual" collection of Beer's comments
 * A concept declared in Beer's Bounded Context
 */
abstract class BeerComments
{
    /** @var BeerId */
    protected $beerId;

    public function __construct(BeerId $beerId)
    {
        $this->beerId = $beerId;
    }

    /**
     * @param BeerComment $comment
     * @param Uuid $userId
     * @param string $username
     * @throws BeerException
     */
    abstract public function add(BeerComment $comment, Uuid $userId, string $username): void;

    abstract public function count(): int;
}

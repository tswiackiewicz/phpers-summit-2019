<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Application\Command;

use TSwiackiewicz\PHPersSummit\Beer\Domain\Comment\BeerComment;
use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerId;
use TSwiackiewicz\PHPersSummit\Shared\Uuid;

class AddComment
{
    /** @var BeerId */
    private $beerId;

    /** @var BeerComment */
    private $comment;

    /** @var Uuid */
    private $userId;

    /** @var string */
    private $username;

    public function __construct(BeerId $beerId, BeerComment $comment, Uuid $userId, string $username)
    {
        $this->beerId = $beerId;
        $this->comment = $comment;
        $this->userId = $userId;
        $this->username = $username;
    }

    public function beerId(): BeerId
    {
        return $this->beerId;
    }

    public function comment(): BeerComment
    {
        return $this->comment;
    }

    public function userId(): Uuid
    {
        return $this->userId;
    }

    public function username(): string
    {
        return $this->username;
    }
}

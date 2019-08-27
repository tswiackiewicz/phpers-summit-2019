<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Application\Command;

use TSwiackiewicz\PHPersSummit\Beer\Domain\Comment\Comment;
use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerId;
use TSwiackiewicz\PHPersSummit\Shared\Uuid;

class AddComment
{
    /** @var BeerId */
    private $beerId;

    /** @var Uuid */
    private $userId;

    /** @var string */
    private $username;

    /** @var Comment */
    private $comment;

    public function __construct(BeerId $beerId, Uuid $userId, string $username, Comment $comment)
    {
        $this->beerId = $beerId;
        $this->userId = $userId;
        $this->username = $username;
        $this->comment = $comment;
    }

    public function beerId(): BeerId
    {
        return $this->beerId;
    }

    public function userId(): Uuid
    {
        return $this->userId;
    }

    public function username(): string
    {
        return $this->username;
    }

    public function comment(): Comment
    {
        return $this->comment;
    }
}
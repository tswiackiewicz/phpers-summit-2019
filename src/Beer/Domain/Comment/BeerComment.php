<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Domain\Comment;

class BeerComment
{
    /** @var string */
    private $comment;

    public function __construct(string $comment)
    {
        $this->comment = $comment;
    }

    public function comment(): string
    {
        return $this->comment;
    }

    public function __toString()
    {
        return $this->comment;
    }
}

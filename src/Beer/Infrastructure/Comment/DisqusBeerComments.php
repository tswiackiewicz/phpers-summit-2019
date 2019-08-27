<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Infrastructure\Comment;

use TSwiackiewicz\PHPersSummit\Beer\Domain\Comment\BeerComments;
use TSwiackiewicz\PHPersSummit\Beer\Domain\Comment\Comment;
use TSwiackiewicz\PHPersSummit\Shared\Uuid;

/**
 * Sample implementation of BeerComments interface
 * Data is passed and retrieved from disqus.com using provided API
 */
class DisqusBeerComments implements BeerComments
{
    public function add(Uuid $userId, string $username, Comment $comment): void
    {
        // add new comment using disqus.com API
    }

    public function count(): int
    {
        // count comments using disqus.com API
        return 0;
    }
}
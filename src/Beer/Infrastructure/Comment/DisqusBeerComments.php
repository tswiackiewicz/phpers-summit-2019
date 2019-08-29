<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Infrastructure\Comment;

use TSwiackiewicz\PHPersSummit\Beer\Domain\Comment\{BeerComment, BeerComments};
use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerException;
use TSwiackiewicz\PHPersSummit\Shared\Uuid;

/**
 * Sample implementation of BeerComments interface
 * Data is passed and retrieved from disqus.com using provided API
 */
class DisqusBeerComments extends BeerComments
{
    /**
     * @param BeerComment $comment
     * @param Uuid $userId
     * @param string $username
     * @throws BeerException
     */
    public function add(BeerComment $comment, Uuid $userId, string $username): void
    {
        // add new comment using disqus.com API / REST

        throw BeerException::commentFailure($this->beerId);
    }

    public function count(): int
    {
        // count comments using disqus.com API / REST
        return 0;
    }
}

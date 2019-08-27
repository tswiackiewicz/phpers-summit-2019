<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Domain\Comment;

use TSwiackiewicz\PHPersSummit\Shared\Uuid;

/**
 * "Virtual" collection of Beer's comments
 * A concept declared in Beer's Bounded Context
 */
interface BeerComments
{
    public function add(Uuid $userId, string $username, Comment $comment): void;

    public function count(): int;
}
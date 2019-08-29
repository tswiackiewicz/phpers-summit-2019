<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Shared;

class BeerException extends \Exception
{
    private const NOT_ALLOWED_FOR_NOT_ADMIN_USERS = 1234;
    private const RATING_FAILURE = 2345;
    private const COMMENT_FAILURE = 3456;
    private const NOT_FOUND = 4567;

    public static function notAllowedForNotAdminUsers(): self
    {
        return new self('Not allowed for not admin users', self::NOT_ALLOWED_FOR_NOT_ADMIN_USERS);
    }

    public static function ratingFailure(BeerId $beerId): self
    {
        return new self("Unable to rate beer {(string)$beerId}", self::RATING_FAILURE);
    }

    public static function commentFailure(BeerId $beerId): self
    {
        return new self("Unable to comment beer {(string)$beerId}", self::COMMENT_FAILURE);
    }

    // TODO (refactoring?) move to BeerNotFoundException
    public static function notFound(BeerId $beerId): self
    {
        return new self("Beer does not exists {(string)$beerId}", self::NOT_FOUND);
    }
}

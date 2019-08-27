<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Shared;

class BeerException extends \Exception
{
    private const NOT_ALLOWED_FOR_NOT_PREMIUM_USERS = 1234;
    private const RATING_FAILURE = 2345;

    public static function notAllowedForNotPremiumUsers(): self
    {
        return new self('Not allowed for not premium users', self::NOT_ALLOWED_FOR_NOT_PREMIUM_USERS);
    }

    public static function ratingFailure(BeerId $beerId): self
    {
        return new self("Unable to rate beer {(string)$beerId}", self::RATING_FAILURE);
    }
}
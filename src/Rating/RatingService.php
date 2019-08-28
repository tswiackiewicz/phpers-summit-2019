<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Rating;

/**
 * Legacy rating service with "hall of shame" method contract - full of bool and nullable parameters (all required),
 * inconsistent return type (mixed = bool or null when error) etc.
 */
class RatingService
{
    function rate($beerId, $rating, $userId, $userLogin, $otherBoolFlag, $nullableParameter, $premium)
    {
        // ....
    }
}

<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Application;

use TSwiackiewicz\PHPersSummit\Beer\Domain\BeerRating;
use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerException;
use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerId;
use TSwiackiewicz\PHPersSummit\Rating\RatingService;

/**
 * Adapter for legacy rating service
 */
class BeerRatingServiceAdapter implements BeerRating
{
    /** @var RatingService */
    private $ratingService;

    public function __construct(RatingService $ratingService)
    {
        $this->ratingService = $ratingService;
    }

    /**
     * @param BeerId $beerId
     * @param int $rating
     * @throws BeerException
     */
    public function rate(BeerId $beerId, int $rating): void
    {
        // success only when true is returned
        if ($this->ratingService->rate(
            $beerId,
            $rating,
            null,
            '',
            false,
            null,
            true
        ) === true) {
            return;
        }

        throw BeerException::ratingFailure($beerId);
    }

    public function avgRating(BeerId $beerId): int
    {
        // TODO: Implement avgRating() method.
        return 0;
    }
}

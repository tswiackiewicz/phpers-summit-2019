<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Domain;

use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerException;
use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerId;

interface BeerRating
{
    /**
     * @param BeerId $beerId
     * @param int $rating
     * @throws BeerException
     */
    public function rate(BeerId $beerId, int $rating): void;

    public function avgRating(BeerId $beerId): int;
}
<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Domain;

use TSwiackiewicz\PHPersSummit\Beer\Shared\{BeerException, BeerId};

/**
 * Domain concept representing rating (score) of given beer
 *
 * TODO (refactoring?) move $beerId to class property
 */
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
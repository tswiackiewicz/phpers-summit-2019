<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Domain;

use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerException;
use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerId;

interface BeerRepository
{
    /**
     * @param BeerId $beerId
     * @return array
     * @throws BeerException
     */
    public function getById(BeerId $beerId): array;

    public function store(Beer $beer): void;
}

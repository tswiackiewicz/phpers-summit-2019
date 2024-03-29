<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Infrastructure;

use TSwiackiewicz\PHPersSummit\Beer\Domain\{Beer, BeerRepository};
use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerId;

class DbBeerRepository implements BeerRepository
{
    public function getById(BeerId $beerId): array
    {
        // TODO: Implement getById() method.
        return [];
    }

    public function store(Beer $beer): void
    {
        // store beer with type at shared (between beer & type) database
    }
}

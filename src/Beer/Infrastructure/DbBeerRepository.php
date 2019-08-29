<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Infrastructure;

use TSwiackiewicz\PHPersSummit\Beer\Domain\Beer;
use TSwiackiewicz\PHPersSummit\Beer\Domain\BeerRepository;
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
        // store beer's type at shared (between beer & type) database
    }
}

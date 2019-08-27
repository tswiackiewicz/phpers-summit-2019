<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Infrastructure\Type;

use TSwiackiewicz\PHPersSummit\Beer\Domain\Type\BeerTypeRepository;
use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerId;

class DbBeerTypeRepository implements BeerTypeRepository
{
    public function store(BeerId $beerId, string $type): void
    {
        // store beer's type at shared (between beer & type) database
    }
}